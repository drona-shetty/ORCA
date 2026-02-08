<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CYPEvent;
use App\Models\CYPEventType;
use App\Models\Homepage;
use App\Models\Article;

class CYPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cypEvents = CYPEvent::all();
        return view('admin.cyp.listing', compact('cypEvents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event_types = CYPEventType::all();
        return view('admin.cyp.add', compact('event_types'));
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
            'event' => 'required'
        ]);

        $request = request()->all();
        
        $tmpFile = $_FILES['banner']['tmp_name'];
        $newFile = 'images/cyp/' . $_FILES['banner']['name'];
        $result = move_uploaded_file($tmpFile, $newFile);
        $request['banner'] = $_FILES['banner']['name'];
        $request['event_type'] = serialize($request['event_type']);
        
        CYPEvent::create($request);

        return redirect('yn-admin/cyp')
            ->with('success', 'CYP Event created successfully.');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cyp = CYPEvent::where('id', $id)->first();
        $event_types = CYPEventType::all();
        $et_ids = unserialize($cyp->event_type);
        return view('admin.cyp.edit', compact('cyp', 'event_types', 'et_ids'));
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
            'event' => 'required'
        ]);
        
        $request = request()->all();
        $cyp = CYPEvent::where('id', $id);
        
        if($_FILES['banner']['name'] != ''){
            $tmpFile = $_FILES['banner']['tmp_name'];
            $newFile = 'images/cyp/' . $_FILES['banner']['name'];
            $result = move_uploaded_file($tmpFile, $newFile);
            $title_image = $_FILES['banner']['name'];
        } else {
            $title_image = $cyp->first()->banner;
        }
        
        $cyp->update([
            'event' => $request['event'],
            'date' => $request['date'],
            'venue' => $request['venue'],
            'banner' => $title_image,
            'description' => $request['description'],
            'event_type' => serialize($request['event_type'])
        ]);

        return redirect('yn-admin/cyp')
            ->with('success', 'CYP Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cyp = CYPEvent::where('id', $id);
        $cyp->delete();

        return redirect('yn-admin/cyp')
            ->with('success', 'CYP Event deleted successfully');
    }

    /**
     * Banner Selection
     */
    public function cypBanner(Request $request)
    {
        Homepage::updateOrCreate([
            'meta_key' => 'cyp_banner'
        ],[
            'meta_value' => serialize($request->articleId)
        ]);

        return redirect('yn-admin/cyp_design');
    }

    /**
     * CYP Design Page
     */
    public function cypDesign()
    {
        $articles = Article::select('id', 'title')->where('status', 'approved')->orWhere('status', 'processing')->orderBy('created_at', 'asc')->get();

        return view('admin.cyp.design', compact('articles'));
    }
}
