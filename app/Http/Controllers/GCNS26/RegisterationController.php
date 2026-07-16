<?php

namespace App\Http\Controllers\GCNS26;

use App\Http\Controllers\Controller;
use App\Mail\EventRegisteration;
use App\Models\Event\Registeration;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use ApiResponse;

    public function index()
    {
        $registerations = Registeration::where('gcns', 2026)->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.gcns26.registeration.listing', compact('registerations'));
    }

    public function truncateRows()
    {
        Registeration::truncate();
    }

    public function scheduleRegistration(Request $request)
    {
        $errorData = array();
        $requestData = array(
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'occupation' => 'required',
            'organization' => 'required',
        );
        $request = request()->all();

        if (empty($request['fname'])) {
            $errorData['fname'] = 'First name is required';
        }
        if (empty($request['lname'])) {
            $errorData['lname'] = 'Last name is required';
        }
        if (empty($request['email'])) {
            $errorData['email'] = 'Email is required';
        }
        if (empty($request['phonenumber'])) {
            $errorData['phonenumber'] = 'Mobile number is required';
        }
        if (empty($request['occupation'])) {
            $errorData['occupation'] = 'Occupation is required';
        }
        if (empty($request['organization'])) {
            $errorData['organization'] = 'Organization is required';
        }
        if (empty($request['description'])) {
            $errorData['description'] = 'Description is required';
        }
        if (empty($request['city'])) {
            $errorData['city'] = 'City is required';
        }

        if (count($errorData) > 0) {
            return redirect('pages/gcns2026?email_status=failed');
        } else {
            $newCreateUser = Registeration::create($request);
            $name = $newCreateUser['fname'] . ' ' . $newCreateUser['lname'];
            $toEmail = $newCreateUser['email'];

            Mail::to($toEmail)->send(new EventRegisteration($name));
            return redirect('pages/gcns2026?email_status=success');
        }
    }

    public function destroy($id)
    {
        $registerationData = Registeration::where('id', $id);
        $registerationData->delete();

        return redirect('yn-admin/gcns26/registeration')
            ->with('success', 'Registeration deleted successfully');
    }
}
