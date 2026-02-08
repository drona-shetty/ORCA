<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserMeta;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.listing', compact('categories'));
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
            'category' => 'required'
        ]);

        $request = request()->all();
        
        if(isset($request['title']) && !empty($request['title'])){
            $request['title'] = $request['title'];
        }
        $slug = Str::of($request['category'])->slug('-');
        
        $request['slug'] = $slug;

        Category::create($request);

        return redirect('yn-admin/category')
            ->with('success', 'Category created successfully.');
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
        if($slug == 'cicm'){
            $users = User::whereIn('id', [74, 141, 73, 75, 263])->get();
            $currentDate = date("Y-m-d");
            $firstDateOfMonth  = date('Y-m-01 H:i:s', strtotime($currentDate));
            
            $articles = Article::select('id', 'tags', 'category', 'title', 'subtitle', 'slug', 'created_at', 'title_image', 'author_id')->where('category', $category['id'])->orderBy('created_at', 'desc')->get();
            // dd($articles);

            $currentFormatedYear = date('Y');
            $monthsYearArticle = array();
            
            $allArticles = $articles;
            foreach ($allArticles as $articleKey => $articleValue) {
                $articleFormatedDate = date('F Y',strtotime($articleValue['created_at']));
                $articleFormatedYear = date('Y',strtotime($articleValue['created_at']));

                // if ($articleFormatedYear != $currentFormatedYear) { //year is not same as currentyear
                //     $year = $articleFormatedYear; // The year for which you want to get the last month
                //     $lastMonthOfYear = date('F Y', mktime(0, 0, 0, 12, 31, $year));
                //     $monthsYearArticle[$lastMonthOfYear][] = $articleValue;
                // }else {
                //     $monthsYearArticle[$articleFormatedDate][] = $articleValue;
                // }
                $monthsYearArticle[$articleFormatedDate][] = $articleValue;
            }
            
            return view('frontend.category.cicm', compact('category', 'articles', 'monthsYearArticle', 'users'));
        }else{
            $articles = Article::select('id', 'tags', 'category', 'title', 'subtitle', 'slug', 'created_at', 'title_image', 'author_id')->where('category', $category['id'])->orderBy('created_at', 'desc')->get();
        }
      
        if($slug == 'issue-brief'){
            return view('frontend.category.issue-brief', compact('category', 'articles'));
        }else if ($slug == 'cicm-insights') {
            return view('frontend.category.cicm-insights', compact('category', 'articles'));
        }else if ($slug == 'expert-speak') {
            return view('frontend.category.expert-speak', compact('category', 'articles'));
        }else if ($slug == 'special-report') {
            return view('frontend.category.special-report', compact('category', 'articles'));
        }else{ //opinion-pieces,reviewing-chinese-culture,backgrounders
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
        $category = Category::where('id', $id)->first();
        return view('admin.category.edit', compact('category'));
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
            'category' => 'required'
        ]);
        
        $category = Category::where('id', $id);
        $slug = Str::of($request['category'])->slug('-');
        
        $request['slug'] = $slug;

        $category->update([
            'category' => $request['category'],
            'slug' => $request['slug'],
            'title' => isset($request['title']) && !empty($request['title']) ? $request['title'] : null
        ]);

        return redirect('yn-admin/category')
            ->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::where('id', $id);
        $category->delete();

        return redirect('yn-admin/category')
            ->with('success', 'Category deleted successfully');
    }

    public function check_if_used(Request $request)
    {
        // $id = $request->id;
        // $articles = Article::select('title','id', 'slug')->where('category', $id)->get();
        $articles = array();
        return $articles;
    }
}
