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
use App\Movie, App\Member, App\MovieMember;

class MovieController extends Controller
{
    public function index(){
        
    	try {
    		$paginate = env('Paginate');
    		// print_r($paginate);die;
            $movie_list = Movie::with('movie_member.members')->paginate($paginate);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()], 200);
        }
        return response()->json(['success' => true, 'data' => $movie_list], Response::HTTP_OK);
    }
}
