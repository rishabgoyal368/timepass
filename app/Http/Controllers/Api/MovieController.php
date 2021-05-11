<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Movie, App\Member, App\MovieMember;
use Carbon\Carbon;
class MovieController extends Controller
{
    public function index()
    {
        try {
            $paginate = env('Paginate');
            $movie_list = Movie::with('movie_member.members')->paginate((int) $paginate);
            $response['code'] = 200;
            $response['data'] = $movie_list;
            $response['message'] = "Movies list";
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            $response['code'] = 404;
            $response['status'] = $e->getMessage();
            $response['message'] = "missing parameters";
        }
        return response()->json($response);     
    }

    public function upcomming_list()
    {
        try {
            $paginate = env('Paginate');
            $movie_list = Movie::with('movie_member.members')->whereDate('release_date', '>', Carbon::now())->paginate((int) $paginate);
            $response['code'] = 200;
            $response['data'] = $movie_list;
            $response['message'] = "Movies list";
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            $response['code'] = 404;
            $response['status'] = $e->getMessage();
            $response['message'] = "missing parameters";
        }
        return response()->json($response);     
    }

    public function trending_movie_list()
    {
        try {
            $paginate = env('Paginate');
            $movie_list = Movie::with('movie_member.members')->paginate((int) $paginate);
            $response['code'] = 200;
            $response['data'] = $movie_list;
            $response['message'] = "Movies list";
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            $response['code'] = 404;
            $response['status'] = $e->getMessage();
            $response['message'] = "missing parameters";
        }
        return response()->json($response);     
    }

    public function get_movies(){
        try {
            $movie_list                 =   [];
            $movie_list['web_series']   =   Movie::with('movie_member.members')->where('category','=','web_series')->take(3)->get()->toArray();
            $movie_list['movie']        =   Movie::with('movie_member.members')->where('category','=','movie')->take(3)->get()->toArray();;
            $movie_list['serial']       =   Movie::with('movie_member.members')->where('category','serial')->take(3)->get()->toArray();;
            $movie_list['documentary']  =   Movie::with('movie_member.members')->where('category','documentary')->take(3)->get()->toArray();;
            $movie_list['chilling']     =   Movie::with('movie_member.members')->where('category','chilling')->take(3)->get()->toArray();;
            
            $response['code']           =   200;
            $response['data']           =   $movie_list;
            $response['message']        =   "Get Movies list";
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            $response['code'] = 404;
            $response['status'] = $e->getMessage();
            $response['message'] = "missing parameters";
        }
        return response()->json($response); 
    }

}
