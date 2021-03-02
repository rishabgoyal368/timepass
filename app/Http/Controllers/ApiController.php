<?php

namespace App\Http\Controllers;

use JWTAuth;
use Validator;
use IlluminateHttpRequest;
use AppHttpRequestsRegisterAuthRequest;
use TymonJWTAuthExceptionsJWTException;
use SymfonyComponentHttpFoundationResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use App\Admin;
use Mail;

class ApiController extends Controller
{
	public function user_registration(Request $request)
	   {        
    	$data = $request->all();
       	$validator = Validator::make(
           $request->all(),
           [
               'first_name' => 'required',
               'last_name' 	=> 'required',
               'email' 		=> 'required|email',
               'password' 	=> 'required',
               'mobile_number'=> 'required|numeric'
           ]
       	);

       	if ($validator->fails()) {

           return response()->json(['error' => $validator->errors()], 401);
       	}

       	$check_email_exists = User::where('email',$data['email'])->first();
       	if(!empty($check_email_exists)){
           return response()->json(['error' => 'This Email is already exists.'], 401);
       	}


       	$user 					= new User();
       	$user->first_name 		= $data['first_name'];
       	$user->last_name  		= $data['last_name'];
       	$user->email 	 		= $data['email'];
       	$user->mobile_number 	= $data['mobile_number'];
       	$user->password 		= $data['password'];
       	$user->status 			= 'Active';
      	if($user->save()){
      		$project_name = env('App_name');
      		$email = $data['email'];
      		try{
                if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {   
                    Mail::send('emails.user_register_success',['name'=>ucfirst($user['first_name']).' '.$user['last_name'],'email'=>$email,'password'=>$user['password']],function($message) use($email,$project_name){
                        $message->to($email,$project_name)->subject('User registered successfully');
                    });
                }
            }catch(Exception $e){
            }
  	   		return response()->json(['success' => true, 'data' => $user], Response::HTTP_OK);
      	}else{
      		return response()->json(['error' => false, 'data' => 'Something went wrong, Please try again later.']);
      	}

  
            
	   }

	public function user_login(Request $request)
	{
		$admin_credentials = $request->only(['email','password']);
		if(!$token = auth()->attempt($admin_credentials)){
			return response()->json(['error','Incorrect email/password'],401);
		}
		
		return response()->json(['token'=>$token]);;
	}

	 // public function logout(Request $request)
	 // {
	 //     try {
	 //         JWTAuth::invalidate($request->token);

	 //         return response()->json([
	 //             'success' => true,
	 //             'message' => 'User logged out successfully'
	 //         ]);
	 //     } catch (JWTException $exception) {
	 //         return response()->json([
	 //             'success' => false,
	 //             'message' => 'Sorry, the user cannot be logged out'
	 //         ]);
	 //     }
	 // }   
}
