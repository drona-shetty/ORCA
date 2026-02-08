<?php

namespace App\Http\Controllers\GCNS23;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Graphs;
use App\Models\Article;
use Illuminate\Support\Str;
use App\Models\Gcns\Speaker;
use App\Models\Gcns\Schedule;
use App\Models\Gcns\ScheduleSession;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::orderBy('id', 'asc')->get();
        return view('admin.gcns23.schedule.listing', compact('schedules'));
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
            'scheduleDate' => 'required',
        ]);
        $request = request()->all();
       
        Schedule::create($request);
        return redirect('yn-admin/gcns23/schedule')
            ->with('success', 'Schedule created successfully.');
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
        $schedule = Schedule::where('id', $id)->first();
        $scheduleSession = ScheduleSession::where('scheduleId',$schedule->id)->orderBy('startTime', 'asc')->get();
        
        return view('admin.gcns23.schedule.edit', compact('schedule','scheduleSession'));
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
            'scheduleDate' => 'required',
        ]);

        $Schedule = Schedule::where('id', $id);
        $Schedule->update([
            'title' => $request['title'],
            'scheduleDate' => $request['scheduleDate']
        ]);

        return redirect('yn-admin/gcns23/schedule')
            ->with('success', 'Schedule updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       
        $scheduleSession = ScheduleSession::where('scheduleId',$id);
        $scheduleSession->delete();

        $schedule = Schedule::where('id', $id);
        $schedule->delete();

        return redirect('yn-admin/gcns23/schedule')
            ->with('success', 'Schedule and its sessions deleted successfully');
    }

    public function check_if_used(Request $request)
    {
        $id = $request->id;
        $articles = Article::select('title','id', 'slug')->where('category', $id)->get();
        
        return $articles;
    }

    //sessoin module start here
    public function sessionAdd($id)
    {   
        $schedule = Schedule::where('id', $id)->first();
        return view('admin.gcns23.sessions.add', compact('schedule'));
    }

    public function sessionCreate(Request $request)
    {   
        $request->validate([
            'title' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
            'description' => 'required',
        ]);
        $request = request()->all();
        ScheduleSession::create($request);
        return redirect('yn-admin/gcns23/schedule/'.$request['scheduleId'].'/edit')
            ->with('success', 'Session created successfully.');
    }

    public function sessionEdit($scheduleId,$sessionId)
    {
        $schedule = Schedule::where('id', $scheduleId)->first();
        if($schedule)
        {
            $sessionData = ScheduleSession::where('id',$sessionId)->where('scheduleId',$scheduleId)->first();
            return view('admin.gcns23.sessions.edit', compact('schedule','sessionData'));
        }else{
            return redirect('yn-admin/gcns23/schedule');
        }
    }

    public function sessionUpdate(Request $request,$scheduleId,$sessionId)
    {   
        $request->validate([
            'title' => 'required',
            'startTime' => 'required',
            'endTime' => 'required',
            'description' => 'required',
        ]);
        $request = request()->all();
    
        $scheduleSession = ScheduleSession::where('id', $sessionId);
        $scheduleSession->update([
            'scheduleId' => $request['scheduleId'],
            'title' => $request['title'],
            'startTime' => $request['startTime'],
            'endTime' => $request['endTime'],
            'description' => $request['description'],
            'sessionTag' => $request['sessionTag']
        ]);
        
        return redirect('yn-admin/gcns23/schedule/'.$request['scheduleId'].'/edit')
        ->with('success', 'Session Updated successfully.');
    }

    public function sessionDestroy($scheduleId,$sessionId)
    {
        $scheduleSession = ScheduleSession::where('id',$sessionId)->where('scheduleId',$scheduleId);
        $scheduleSession->delete();

        return redirect('yn-admin/gcns23/schedule/'.$scheduleId.'/edit')
            ->with('success', 'Session deleted successfully');
    }
}
