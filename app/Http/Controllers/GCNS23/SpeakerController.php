<?php

namespace App\Http\Controllers\GCNS23;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Graphs;
use App\Models\Article;
use Illuminate\Support\Str;
use App\Models\Gcns\Speaker;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers = Speaker::orderBy('id', 'desc')->paginate(15);
        return view('admin.gcns23.speaker.listing', compact('speakers'));
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
            'name' => 'required',
            'image' => 'required|image',
            'designation' => 'required',
            'content' => 'required',
        ]);

        $request = request()->all();

        $tmpFile = $_FILES['image']['tmp_name'];
        $targetDirectory = "images/event/speaker/";
        if (!file_exists($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }
        $newFile = $targetDirectory . str_replace(' ', '_', $_FILES['image']['name']);
        $result = move_uploaded_file($tmpFile, $newFile);
        $imageVal = str_replace(' ', '_', $_FILES['image']['name']);
        $request['image'] = $imageVal;

        Speaker::create($request);

        return redirect('yn-admin/gcns23/speaker')
            ->with('success', 'Speaker created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $speakers = Speaker::orderBy('id', 'desc')->get();
        return view('frontend.graphs', compact('speakers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speaker = Speaker::where('id', $id)->first();
        return view('admin.gcns23.speaker.edit', compact('speaker'));
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
            'name' => 'required',
            'designation' => 'required',
            'content' => 'required',
        ]);

        $Speaker = Speaker::where('id', $id);
        
        if($_FILES['image']['name'] != ''){
            $tmpFile = $_FILES['image']['tmp_name'];
            $newFile = 'images/event/speaker/' . $_FILES['image']['name'];
            $result = move_uploaded_file($tmpFile, $newFile);
            $imageVal = str_replace(' ', '_', $_FILES['image']['name']);
        } else {
            $imageVal = $Speaker->first()->image;
        }

        $Speaker->update([
            'name' => $request['name'],
            'image' => $imageVal,
            'designation' => $request['designation'],
            'content' => $request['content']
        ]);

        return redirect('yn-admin/gcns23/speaker')
            ->with('success', 'Speaker updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speaker = Speaker::where('id', $id);
        $speaker->delete();

        return redirect('yn-admin/gcns23/speaker')
            ->with('success', 'Speaker deleted successfully');
    }

    public function check_if_used(Request $request)
    {
        $id = $request->id;
        $articles = Article::select('title','id', 'slug')->where('category', $id)->get();
        
        return $articles;
    }

    public function getSpeakerData($id)
    {
        $speaker = Speaker::where('id', $id)->first();
        
        if($speaker)
        {
            return view('gcns23.speaker', compact('speaker'));
        }else{
            return redirect('pages/gcns2023');
        }
    }
}
