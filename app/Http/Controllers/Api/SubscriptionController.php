<?php

namespace App\Http\Controllers\Api;

use JWTAuth;
use Validator;
use IlluminateHttpRequest;
use AppHttpRequestsRegisterAuthRequest;
use TymonJWTAuthExceptionsJWTException;
use SymfonyComponentHttpFoundationResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Subscription;

class SubscriptionController extends Controller
{
    public function index(){
        
    	try {
    		$paginate = env('Paginate');
            $subscription_list = Subscription::paginate($paginate);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()], 200);
        }
        return response()->json(['success' => true, 'data' => $subscription_list], Response::HTTP_OK);
    }
}
