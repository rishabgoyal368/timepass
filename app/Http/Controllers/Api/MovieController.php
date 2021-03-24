<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Movie, App\Member, App\MovieMember;

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
}
