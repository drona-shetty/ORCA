<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Graphs;
use App\Models\Article;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserMeta;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graphs = Graphs::orderBy('sequence_no', 'asc')->get();
        return view('admin.fileupload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fileToUpload' => 'required|mimes:jpeg,png,pdf,mp3,mp4,video/mp4', // Adjust the allowed file types and size as per your requirements
        ]);

        $tmpFile = $_FILES['fileToUpload']['tmp_name'];
        // dd($tmpFile);
        $newFile = 'allfiles/' . str_replace(' ', '_', $_FILES['fileToUpload']['name']);
        $result = move_uploaded_file($tmpFile, $newFile);
        // url('images/tut/'.$profile->image_profile)
        $createdLink = url('/' . $newFile);

        return redirect('yn-admin/fileUpload')->with(['success' => 'Your File is uploaded.', 'message' => $createdLink]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();
        if ($slug == 'cicm') {
            $currentDate = date('Y-m-d H:i:s');
            $firstDateOfMonth = date('Y-m-01 H:i:s', strtotime($currentDate));

            $articles = Article::select('id', 'tags', 'category', 'title', 'subtitle', 'slug', 'created_at', 'title_image', 'author_id')->where('created_at', '>', $firstDateOfMonth)->where('category', $category['id'])->orderBy('created_at', 'desc')->get();
            // dd($articles);

            $currentFormatedYear = date('Y');
            $monthsYearArticle = [];

            $allArticles = $articles;
            foreach ($allArticles as $articleKey => $articleValue) {
                $articleFormatedDate = date('F Y', strtotime($articleValue['created_at']));
                $articleFormatedYear = date('Y', strtotime($articleValue['created_at']));

                if ($articleFormatedYear != $currentFormatedYear) {
                    //year is not same as currentyear
                    $year = $articleFormatedYear; // The year for which you want to get the last month
                    $lastMonthOfYear = date('F Y', mktime(0, 0, 0, 12, 31, $year));
                    $monthsYearArticle[$lastMonthOfYear][] = $articleValue;
                } else {
                    $monthsYearArticle[$articleFormatedDate][] = $articleValue;
                }
            }

            return view('frontend.category.cicm', compact('category', 'articles', 'monthsYearArticle'));
        } else {
            $articles = Article::select('id', 'tags', 'category', 'title', 'subtitle', 'slug', 'created_at', 'title_image', 'author_id')->where('category', $category['id'])->orderBy('created_at', 'desc')->get();
        }

        if ($slug == 'issue-brief') {
            return view('frontend.category.issue-brief', compact('category', 'articles'));
        } elseif ($slug == 'cicm-insights') {
            return view('frontend.category.cicm-insights', compact('category', 'articles'));
        } elseif ($slug == 'expert-speak') {
            return view('frontend.category.expert-speak', compact('category', 'articles'));
        } else {
            //opinion-pieces,reviewing-chinese-culture,backgrounders
            return view('frontend.category.view', compact('category', 'articles'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $graph = Graphs::where('id', $id)->first();
        return view('admin.graphs.edit', compact('graph'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sequence' => 'required',
        ]);

        $Graph = Graphs::where('id', $id);

        if (isset($request['sequence']) && !empty($request['sequence'])) {
            $request['sequence_no'] = $request['sequence'];
        }

        if ($_FILES['image']['name'] != '') {
            $tmpFile = $_FILES['image']['tmp_name'];
            $newFile = 'images/graph/' . $_FILES['image']['name'];
            $result = move_uploaded_file($tmpFile, $newFile);
            $imageVal = $_FILES['image']['name'];
        } else {
            $imageVal = $Graph->first()->image;
        }

        $request['image'] = $imageVal;
        if (isset($request['content']) && !empty($request['content'])) {
            $request['content'] = $request['content'];
        } else {
            $request['content'] = null;
        }

        // dd($imageVal,$request);
        $Graph->update([
            'sequence_no' => $request['sequence_no'],
            'image' => $imageVal,
            'content' => $request['content'],
        ]);

        return redirect('yn-admin/graphsPage')->with('success', 'Graph updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $graph = Graphs::where('id', $id);
        $graph->delete();

        return redirect('yn-admin/graphsPage')->with('success', 'Graph deleted successfully');
    }

    public function check_if_used(Request $request)
    {
        $id = $request->id;
        $articles = Article::select('title', 'id', 'slug')->where('category', $id)->get();

        return $articles;
    }
}
