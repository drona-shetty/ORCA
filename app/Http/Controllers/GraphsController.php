<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Graphs;
use App\Models\Article;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserMeta;

class GraphsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graphs = Graphs::orderBy('sequence_no', 'asc')->get();
        return view('admin.graphs.listing', compact('graphs'));
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
            'sequence' => 'required',
            'image' => 'required|image',
            'name' => 'required',
            'designation' => 'required'
        ]);

        $request = request()->all();

        $tmpFile = $_FILES['image']['tmp_name'];
        $newFile = 'images/graph/' . $_FILES['image']['name'];
        $result = move_uploaded_file($tmpFile, $newFile);

        if(isset($request['sequence']) && !empty($request['sequence'])){
            $request['sequence_no'] = $request['sequence'];
        }

        if(isset($request['content']) && !empty($request['content'])){
            $request['content'] = $request['content'];
        }
        
        if(isset($request['name']) && !empty($request['name'])){
            $request['name'] = $request['name'];
        }

        if(isset($request['designation']) && !empty($request['designation'])){
            $request['designation'] = $request['designation'];
        }

        if(isset($request['facebook']) && !empty($request['facebook'])){
            $request['facebook'] = $request['facebook'];
        }else{
            $request['facebook'] = '#';
        }

        if(isset($request['twitter']) && !empty($request['twitter'])){
            $request['twitter'] = $request['twitter'];
        }else{
            $request['twitter'] = '#';
        }

        if(isset($request['instagram']) && !empty($request['instagram'])){
            $request['instagram'] = $request['instagram'];
        }else{
            $request['instagram'] = '#';
        }

        if(isset($request['linkedin']) && !empty($request['linkedin'])){
            $request['linkedin'] = $request['linkedin'];
        }else{
            $request['linkedin'] = '#';
        }

        $request['image'] = $_FILES['image']['name'];

        Graphs::create($request);

        return redirect('yn-admin/graphsPage')
            ->with('success', 'Graph created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $graphs = Graphs::orderBy('sequence_no', 'asc')->get();
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
            'name' => 'required',
            'designation' => 'required'
        ]);

        $Graph = Graphs::where('id', $id);

        if(isset($request['sequence']) && !empty($request['sequence'])){
            $request['sequence_no'] = $request['sequence'];
        }
        
        if($_FILES['image']['name'] != ''){
            $tmpFile = $_FILES['image']['tmp_name'];
            $newFile = 'images/graph/' . $_FILES['image']['name'];
            $result = move_uploaded_file($tmpFile, $newFile);
            $imageVal = $_FILES['image']['name'];
        } else {
            $imageVal = $Graph->first()->image;
        }

        $request['image'] = $imageVal;
        if(isset($request['content']) && !empty($request['content'])){
            $request['content'] = $request['content'];
        }else{
            $request['content'] = null;
        }
        
        if(isset($request['facebook']) && !empty($request['facebook'])){
            $request['facebook'] = $request['facebook'];
        }else{
            $request['facebook'] = '#';
        }

        if(isset($request['twitter']) && !empty($request['twitter'])){
            $request['twitter'] = $request['twitter'];
        }else{
            $request['twitter'] = '#';
        }

        if(isset($request['instagram']) && !empty($request['instagram'])){
            $request['instagram'] = $request['instagram'];
        }else{
            $request['instagram'] = '#';
        }

        if(isset($request['linkedin']) && !empty($request['linkedin'])){
            $request['linkedin'] = $request['linkedin'];
        }else{
            $request['linkedin'] = '#';
        }
        
        // dd($imageVal,$request);
        $Graph->update([
            'sequence_no' => $request['sequence_no'],
            'image' => $imageVal,
            'content' => $request['content'],
            'name' => $request['name'],
            'designation' => $request['designation'],
            'facebook' => $request['facebook'],
            'twitter' => $request['twitter'],
            'instagram' => $request['instagram'],
            'linkedin' => $request['linkedin'],
        ]);

        return redirect('yn-admin/graphsPage')
            ->with('success', 'Graph updated successfully.');
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

        return redirect('yn-admin/graphsPage')
            ->with('success', 'Graph deleted successfully');
    }

    public function check_if_used(Request $request)
    {
        $id = $request->id;
        $articles = Article::select('title','id', 'slug')->where('category', $id)->get();
        
        return $articles;
    }
}
