<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Orcafile;

class OrcaFileController extends Controller
{
    public function index()
    {
        $orcafiles = Orcafile::orderBy('created_at', 'desc')->get();

        return view('admin.orcafile.listing', compact('orcafiles'));
    }

    public function show()
    {
        $orcafiles = Orcafile::orderBy('created_at', 'desc')->get();

        return view('orcafiles', compact('orcafiles'));
    }

    public function create()
    {
        return view('admin.orcafile.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'embed_code' => 'required',
        ]);

        $request = request()->all();
        Orcafile::create($request);

        return redirect('yn-admin/orcafiles');
    }

    public function edit($id)
    {
        $orcafile = Orcafile::where('id', $id)->first();

        return view('admin.orcafile.edit', compact('orcafile'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'embed_code' => 'required',
        ]);

        $orcafile = Orcafile::where('id', $id);
        $orcafile->update([
            'title' => $request['title'],
            'description' => $request['description'],
            'embed_code' => $request['embed_code'],
            'created_at' => $request['created_at']
        ]);

        return redirect('yn-admin/orcafiles');
    }

    public function destroy($id)
    {
        $orcafile = Orcafile::where('id', $id);
        $orcafile->delete();

        return redirect('yn-admin/orcafiles');
    }
}