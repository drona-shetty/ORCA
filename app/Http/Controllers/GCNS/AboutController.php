<?php

namespace App\Http\Controllers\GCNS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Event\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::where('gcns', 2025)->orderBy('id', 'desc')->get();
        return view('admin.gcns.about.listing', compact('abouts'));
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
            'title' => 'required',
        ]);

        if($request->image != null)
        {
            $tmpFile = $_FILES['image']['tmp_name'];
            $newFile = 'images/event/media/' . $_FILES['image']['name'];
            $result = move_uploaded_file($tmpFile, $newFile);
        }

        $request = request()->all();
        
        About::create($request);
        return redirect('yn-admin/gcns/about')
            ->with('success', 'About created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $graphs = About::where('gcns', 2025)->orderBy('id', 'asc')->get();
        return view('frontend.graphs', compact('graphs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::where('id', $id)->first();
        return view('admin.gcns.about.edit', compact('about'));
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
            'title' => 'required',
        ]);

        if($request->image != null && $_FILES['image']['name'] !=  About::where('id', $id)->first()->image)
        {
            $tmpFile = $_FILES['image']['tmp_name'];
            $newFile = 'images/event/media/' . $_FILES['image']['name'];
            $result = move_uploaded_file($tmpFile, $newFile);
        }

        $about = About::where('id', $id);
        
        $about->update([
            'title' => $request['title'],
            'desc' => $request['desc'],
            'content' => $request['content'],
            'image' => $_FILES['image']['name']
        ]);

        return redirect('yn-admin/gcns/about')
            ->with('success', 'About updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::where('id', $id);
        $about->delete();

        return redirect('yn-admin/gcns/about')
            ->with('success', 'About deleted successfully');
    }

    public function check_if_used(Request $request)
    {
        $id = $request->id;
        $articles = Article::select('title','id', 'slug')->where('category', $id)->get();
        
        return $articles;
    }
}
