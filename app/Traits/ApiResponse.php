<?php

namespace App\Traits;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Request;
use App\Models\User;

trait ApiResponse {

	public function successApiResponse($message, $data = null,$data2=null) {

        if($data == null) {
            return response()->json([
                'status' => true,
                'data' => [],
                'message' => $message,
            ], Response::HTTP_OK);
        }else if($data2){
            return response()->json([
                'status' => true,
                'message' => $message,
                'count' =>$data2,
                'data' => $data

            ], Response::HTTP_OK);
        }
         else{
            return response()->json([
                'status' => true,
                'message' => $message,
                'data' => $data,
            ], Response::HTTP_OK);
        }

	}

    public function successApiResponseWithNullData($message, $data = null) {
            return response()->json([
                'status' => true,
                'message' => $message,
                'data' => $data,
            ], Response::HTTP_OK);
	}

	public function errorApiResponse($message) {
		return response()->json([
			'status' => false,
			'message' => $message,
		], Response::HTTP_INTERNAL_SERVER_ERROR);
	}

     /**
     * Response with status code 422.
     *
     * @param  array  $data
     * @param  string  $message
     * @return JsonResponse
     */
    public function unprocessableApiResponse(string $message)
    {
        return response()->json([
			'status' => false,
			'message' => $message,
		], Response::HTTP_UNPROCESSABLE_ENTITY);
    }


    public function returnUserByEmailOrPhone($email,$phone){
        $user = null;
        if($email && $phone){
            $user = User::with('role')->where("email",$email)->orWhere("phone",$phone)->first();
        }else if($email){
            $user = User::with('role')->where("email",$email)->first();

        }else if($phone){
            $user = User::with('role')->where("phone",$phone)->first();
        }

        return $user;
    }

    
    public function checkEmailOrPhoneExistence($email,$phone){

        $user = User::where(function($query) use ($email,$phone){
            $query->where("email",$email)->orWhere('phone',$phone);
        })->where('id','!=',Auth::id())->first();

        return $user;
    }



    // public function returnAdminByEmail($email){

    //     $Admin= Admin::where('title',$email)->first();
    //     return $Admin;
    // }


    public function uploadFile($file,$path){
        try {

            $name = time() . '_' . $file->getClientOriginalName();
            if (!is_dir(public_path($path))) {
                mkdir(public_path($path));
            }
            $file->move(public_path($path), $name);
            $path = App::make('url')->to('/') . '/'.$path.'/' . $name;
            return $path;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
