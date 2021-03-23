<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie, App\Member;


class MovieController extends Controller
{
    public function index(){
    	$movie_list = Movie::get()->toArray();
    	$label = 'Movie';
    	return view('Admin.Movies.list',compact('label','movie_list'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $data                       = $request->all();
          	// dd($data);
            $add_movie                  = new Movie;
            $add_movie->name      		= $data['name'];
            $add_movie->tag       		= $data['tag'];
            $add_movie->description     = $data['description'];
            $actor_id = "";
            $director_id = "";
            $crew_member_id = "";
            foreach ($data['actor_name'] as $key => $actor) {
            	$actor_id .= $actor.',';
            }
            foreach ($data['director'] as $key => $director) {
            	$director_id .= $director.',';
            }
            foreach ($data['crew_member'] as $key => $crew_member) {
            	$crew_member_id .= $crew_member.',';
            }
            $add_movie->actor_id     		= $actor_id;
            $add_movie->director_id     	= $director_id;
            $add_movie->crew_member_id     	= $crew_member_id;
            if ($request->video) {
                $fileName = time() . '.' . $request->video->extension();
                $request->video->move(public_path('uploads/video'), $fileName);
                $add_movie->video  =    $fileName;
            }
            if ($add_movie->save()) {
                return redirect('admin/movie')->with('success', 'Movie added successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong, Please try again later.');
            }
        }
        $actor_list 		= Member::where('type','Actor')->get()->toArray();
        $crew_member_list 	= Member::where('type','Crew-member')->get()->toArray();
        $director_list 		= Member::where('type','Director')->get()->toArray();
        $label = 'Movie';
        return view('Admin.Movies.form', compact('label','actor_list','crew_member_list','director_list'));
    }

  

    // public function delete(Request $request, $id)
    // {
    //     $delete = Movie::where('id', $id)->delete();
    //     if ($delete) {
    //         return redirect()->back()->with('success', 'Movie deleted successfully');
    //     } else {
    //         return redirect('admin/category')->with('error', 'Something went wrong, Please try again later.');
    //     }
    // }
}
