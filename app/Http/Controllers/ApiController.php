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
use Mail,Hash,Auth;

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
        $hash_password          = Hash::make($data['password']);
        $user->password         = str_replace("$2y$","$2a$",$hash_password);
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

	public function user_login(Request $request){
        $credentials = $request->only('email', 'password');
        $validator = Validator::make(
           $request->all(),
           [
               'email'      => 'required|email',
               'password'   => 'required'
           ]
        );

        if ($validator->fails()) {

           return response()->json(['error' => $validator->errors()], 401);
        }

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = auth()->attempt($credentials);
                return $this->respondWithToken($token);      
            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            $response = ["message" =>'User does not exist'];
            return response($response, 422);
        
        }          
    }

    public function forgot_password(Request $request){
        $validator = Validator::make(
           $request->all(),
           [
               'email'      => 'required|email',
           ]
        );

        if ($validator->fails()) {

           return response()->json(['error' => $validator->errors()], 401);
        }     


        $check_email_exists = User::where('email',$request['email'])->first();
        if(empty($check_email_exists)){
           return response()->json(['error' => 'Email not exists.'], 401);
        }


        $check_email_exists->otp           =  rand(1111,9999);
        if($check_email_exists->save()){
            $project_name = env('App_name');
            $email = $request['email'];
            try{
                if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {   
                    Mail::send('emails.user_forgot_password_api',['name'=>ucfirst($check_email_exists['first_name']).' '.$check_email_exists['last_name'],'otp'=>$check_email_exists['otp']],function($message) use($email,$project_name){
                        $message->to($email,$project_name)->subject('User Forgot Password');
                    });
                }
            }catch(Exception $e){
            }
            return response()->json(['success' => true, 'data' => 'Email sent on registered Email-id.'], Response::HTTP_OK);
        }else{
            return response()->json(['error' => false, 'data' => 'Something went wrong, Please try again later.']);
        }
    
    }

    public function reset_password(Request $request){
        $data = $request->all();
        $validator = Validator::make(
           $request->all(),
           [
                'otp'       =>  'required|numeric',
               'email'      => 'required|email',
               'password'   => 'required',
               'confirm_password' => 'required_with:password|same:password'
           ]
        );

        if ($validator->fails()) {

           return response()->json(['error' => $validator->errors()], 401);
        }     


        $email = $data['email'];
        $check_email = User::where('email',$email)->first();
        if(empty($check_email['otp'])){
            return response()->json(['error' => 'Something went wrong, Please try again later.']);
        }
        if(empty($check_email)){
            return response()->json(['error' => 'This Email-id is not exists.']);
        }else{
            if($check_email['otp'] == $data['otp']){ 
                $hash_password                  = Hash::make($data['password']);
                $check_email->password          = str_replace("$2y$","$2a$",$hash_password);
                $check_email->otp               = null;
                if($check_email->save()){
                    return response()->json(['success' => true,'message'=>'Password changed successfully.']);
                }else{
                    return response()->json(['error' => 'Something went wrong, Please try again later.']);
                }
            }else{
                return response()->json(['error' => 'OTP mismatch']);
            }
        }



 
    }

    public function profile(Request $request){

        $validator = Validator::make(
           $request->all(),
           [
               'token'      => 'required'
           ]
        );

        if ($validator->fails()) {
           return response()->json(['error' => 'Token not found.'], 401);
        }

        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $q->getMessage()], 401);
        }

        return response()->json(['success' => true, 'data' => $user], 200);
    }

    public function logout(){
        Auth::guard('api')->logout();

        return response()->json(['status' => 'success','message' => 'logout'], 200);
    }


    public function respondWithToken($token){
        return response()->json([
            'access_token'=>$token,
            'token_type'=>'bearer',
            'expire_in'=>auth()->factory()->getTTL()*60
        ]);
    }
}
