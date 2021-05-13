<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Movie, App\WatchHistory;
use Carbon\Carbon;
use Validator;


class MovieController extends Controller
{
    public function index()
    {
        $paginate = env('Paginate');
        $movie_list = Movie::with('movie_member.members')->paginate((int) $paginate);
        $response['code'] = 200;
        $response['data'] = $movie_list;
        $response['message'] = "Movies list";
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
        } catch (Exception $e) {
            $response['code'] = 404;
            $response['status'] = $e->getMessage();
            $response['message'] = "missing parameters";
        }
        return response()->json($response);
    }

    public function trending_movie_list()
    {
        $paginate = env('Paginate');
        $movie_list = Movie::with('movie_member.members')->paginate((int) $paginate);
        $response['code'] = 200;
        $response['data'] = $movie_list;
        $response['message'] = "Movies list";
        return response()->json($response);
    }

    public function get_movies()
    {
        try {
            $movie_list                 =   [];
            $movie_list['web_series']   =   Movie::with('movie_member.members')->where('category', '=', 'web_series')->latest()->take(3)->get()->toArray();
            $movie_list['movie']        =   Movie::with('movie_member.members')->where('category', '=', 'movie')->latest()->take(3)->get()->toArray();;
            $movie_list['serial']       =   Movie::with('movie_member.members')->where('category', 'serial')->latest()->take(3)->get()->toArray();;
            $movie_list['documentary']  =   Movie::with('movie_member.members')->where('category', 'documentary')->latest()->take(3)->get()->toArray();;
            $movie_list['chilling']     =   Movie::with('movie_member.members')->where('category', 'chilling')->latest()->take(3)->get()->toArray();;

            $response['code']           =   200;
            $response['data']           =   $movie_list;
            $response['message']        =   "Get Movies list";
        } catch (Exception $e) {
            $response['code'] = 404;
            $response['status'] = $e->getMessage();
            $response['message'] = "missing parameters";
        }
        return response()->json($response);
    }

    public function getSerials(Request $request)
    {
        $paginate = env('Paginate');
        $movie_list = Movie::with('movie_member.members')->where('category', 'serial')->paginate((int) $paginate);
        $response['code'] = 200;
        $response['data'] = $movie_list;
        $response['message'] = "Movies list";
        return response()->json($response);
    }

    public function getWebSeries(Request $request)
    {
        $paginate = env('Paginate');
        $movie_list = Movie::with('movie_member.members')->where('category', '=', 'web_series')->paginate((int) $paginate);
        $response['code'] = 200;
        $response['data'] = $movie_list;
        $response['message'] = "Movies list";
        return response()->json($response);
    }

    public function getDocumentory(Request $request)
    {
        $paginate = env('Paginate');
        $movie_list = Movie::with('movie_member.members')->where('category', 'documentary')->paginate((int) $paginate);
        $response['code'] = 200;
        $response['data'] = $movie_list;
        $response['message'] = "Movies list";
        return response()->json($response);
    }

    public function getChilling(Request $request)
    {
        $paginate = env('Paginate');
        $movie_list = Movie::with('movie_member.members')->where('category', 'chilling')->paginate((int) $paginate);
        $response['code'] = 200;
        $response['data'] = $movie_list;
        $response['message'] = "Movies list";
        return response()->json($response);
    }

    public function addWatchHistory(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make(
            $request->all(),
            [
                'movie_id' => 'required|exists:movies,id',
            ]
        );
        if ($validator->fails()) {
            $response['code'] = 404;
            $response['status'] = $validator->errors()->first();
            $response['message'] = "missing parameters";
            return response()->json($response);
        }
        $user = auth()->userOrFail();
        $exists = WatchHistory::where('movie_id', $request->movie_id)->where('user_id', $user->id)->first();
        if (!$exists) {
            WatchHistory::create([
                'movie_id' => $request->movie_id,
                'user_id' => $user->id,
            ]);
        }

        return response()->json(['message' => 'watch history added Successfuly', 'code' => 200]);
    }

    public function watch_history(Request $request)
    {
        try {
            $auth = auth()->userOrFail();
            $watch_history = WatchHistory::with('movie')->where('user_id', $auth->id)->get();
            return response()->json(['watch_history' => $watch_history, 'code' => 200]);
        } catch (Exception $e) {
            return response()->json(['message' => 'Something went wrong, Please try again later.', 'code' => 400]);
        }
    }

    public function watchistorydelete(Request $request)
    {
        try {
            $auth = auth()->userOrFail();
            $history = WatchHistory::where('user_id', $auth->id)->delete();
            if (isset($history)) {
                return response()->json(['message' => 'watch history deleted Successfuly', 'code' => 200]);
            } else {
                return response()->json(['message' => 'Something went wrong', 'code' => 404]);
            }
        } catch (Exception $e) {
            return response()->json(['message' => 'Something went wrong, Please try again later.', 'code' => 400]);
        }
    }
    public function delete_history(Request $request)
    {
        $auth = auth()->userOrFail();
        $validator = Validator::make(
            $request->all(),
            [
                'id' => 'required|exists:watch_history,id',
            ]
        );
        if ($validator->fails()) {
            $response['code'] = 404;
            $response['status'] = $validator->errors()->first();
            $response['message'] = "missing parameters";
            return response()->json($response);
        }
        $show = WatchHistory::where('id', $request->id)->where('user_id', $auth->id)->delete();
        if ($show) {
            return response()->json(['message' => 'watch history deleted Successfuly', 'code' => 200]);
        } else {
            return response()->json(['message' => 'Something went wrong', 'code' => 404]);
        }
    }
}
