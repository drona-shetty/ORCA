<?php

namespace App\Http\Controllers;
use App\Models\Graphs;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Graphs::orderBy('sequence_no', 'asc')->get();
        return view('teampage', compact('teams'));
    }
}
