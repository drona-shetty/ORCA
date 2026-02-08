<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event\Convenor;

class ConvenorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convenors = Convenor::where('gcns', 2024)->orderBy('id', 'desc')->paginate(10);
        return view('admin.event.convenor.listing', compact('convenors'));
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
            'logo' => 'required|image',
            'content' => 'required',
            'link' => 'required'
        ]);

        $request = request()->all();
        
        $tmpFile = $_FILES['logo']['tmp_name'];
        $newFile = 'images/event/convenor/' . str_replace(' ', '_', $_FILES['logo']['name']);
        $result = move_uploaded_file($tmpFile, $newFile);

        $request['logo'] = str_replace(' ', '_', $_FILES['logo']['name']);

        Convenor::create($request);

        return redirect('yn-admin/event/convenors')
            ->with('success', 'Convenor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $convenor = Convenor::where('id', $id)->first();
        return view('admin.event.convenor.edit', compact('convenor'));
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
            'content' => 'required',
            'link' => 'required'
        ]);

        $convenor = Convenor::where('id', $id);
        
        if($_FILES['logo']['name'] != ''){
            $tmpFile = $_FILES['logo']['tmp_name'];
            
            $targetDirectory = "images/event/convenor/";
            if (!file_exists($targetDirectory)) {
                mkdir($targetDirectory, 0777, true);
            }
            
            $newFile = $targetDirectory . str_replace(' ', '_', $_FILES['logo']['name']);
            $result = move_uploaded_file($tmpFile, $newFile);
            $imageVal = str_replace(' ', '_', $_FILES['logo']['name']);
        } else {
            $imageVal = $convenor->first()->logo;
        }
        $request['logo'] = $imageVal;
      
        $convenor->update([
            'title' => $request['title'],
            'logo' => $imageVal,
            'content' => $request['content'],
            'link' => $request['link'],
        ]);

        return redirect('yn-admin/event/convenors')
            ->with('success', 'Convenor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $convenor = Convenor::where('id', $id);
        $convenor->delete();

        return redirect('yn-admin/event/convenors')
            ->with('success', 'Convenor deleted successfully');
    }
}
