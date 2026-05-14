<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultancy;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultancyMail;

class ConsultancyController extends Controller
{
    public function index()
    {
        $projects = Consultancy::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.consultancy.list', compact('projects'));
    }

    public function add_project(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'organisation' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|string|max:15',
            'product' => 'required|string',
            'project_details' => 'nullable|string|max:1000',
        ]);

        Consultancy::create($validated);

        Mail::to($validated['email'])->send(new ConsultancyMail($validated));

        return redirect()->back()->with('success', 'Project added successfully!');
    }

    public function view($id)
    {
        $project = Consultancy::findOrFail($id);
        return view('admin.consultancy.view', compact('project'));
    }

    public function delete($id)
    {
        $project = Consultancy::findOrFail($id);
        $project->delete();

        return redirect()->back()->with('success', 'Project deleted successfully!');
    }
}
