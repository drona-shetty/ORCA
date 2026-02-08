<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CYPEventType;

class CYPEventTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event_types = CYPEventType::all();
        return view('admin.cyp.eventType.listing', compact('event_types'));
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
            'event_type' => 'required'
        ]);

        $request = request()->all();
        CYPEventType::create($request);
        
        return redirect('yn-admin/cyp_eventTypes')->with('success', 'Event Type created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event_type = CYPEventType::where('id', $id)->first();
        return view('admin.cyp.eventType.edit', compact('event_type'));
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
            'event_type' => 'required'
        ]);
        
        $event_type = CYPEventType::where('id', $id);
        $event_type->update([
            'event_type' => $request['event_type']    
        ]);
        
        return redirect('yn-admin/cyp_eventTypes')->with('success', 'Event Type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event_type = CYPEventType::where('id', $id);
        $event_type->delete();

        return redirect('yn-admin/cyp_eventTypes')
            ->with('success', 'Event Type deleted successfully');
    }
}
