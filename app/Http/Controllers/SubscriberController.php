<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function index()
    {
        $users = Subscriber::paginate(25);
        return view('admin.subscriber.listing', compact('users'));
    }

    public function search(Request $request)
    {
        $search = $request->input('query');
        $users = Subscriber::where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->paginate(25);

        if ($request->ajax()) {
            return view('admin.subscriber.partial', compact('users'))->render();
        }

        return view('admin.subscriber.listing', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $subscriber = Subscriber::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('/?subscribe=success');
    }
}
