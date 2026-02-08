<?php

namespace App\Http\Controllers\GCNS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Event\Partner;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::where('gcns', 2025)->orderBy('id', 'desc')->paginate(10);
        return view('admin.gcns.partner.listing', compact('partners'));
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
        $newFile = 'images/event/partner/' . str_replace(' ', '_', $_FILES['logo']['name']);
        $result = move_uploaded_file($tmpFile, $newFile);

        $request['logo'] = str_replace(' ', '_', $_FILES['logo']['name']);

        Partner::create($request);

        return redirect('yn-admin/gcns/partner')
            ->with('success', 'Partner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $graphs = Partner::where('gcns', 2025)->orderBy('id', 'asc')->get();
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
        $partner = Partner::where('id', $id)->first();
        return view('admin.gcns.partner.edit', compact('partner'));
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

        $partner = Partner::where('id', $id);
        
        if($_FILES['logo']['name'] != ''){
            $tmpFile = $_FILES['logo']['tmp_name'];
            
            $targetDirectory = "images/event/partner/";
            if (!file_exists($targetDirectory)) {
                mkdir($targetDirectory, 0777, true);
            }
            
            $newFile = $targetDirectory . str_replace(' ', '_', $_FILES['logo']['name']);
            $result = move_uploaded_file($tmpFile, $newFile);
            $imageVal = str_replace(' ', '_', $_FILES['logo']['name']);
        } else {
            $imageVal = $partner->first()->logo;
        }
        $request['logo'] = $imageVal;
      
        $partner->update([
            'title' => $request['title'],
            'logo' => $imageVal,
            'content' => $request['content'],
            'link' => $request['link'],
        ]);

        return redirect('yn-admin/gcns/partner')
            ->with('success', 'Partner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::where('id', $id);
        $partner->delete();

        return redirect('yn-admin/gcns/partner')
            ->with('success', 'Partner deleted successfully');
    }

    public function check_if_used(Request $request)
    {
        $id = $request->id;
        $articles = Article::select('title','id', 'slug')->where('category', $id)->get();
        
        return $articles;
    }
}
