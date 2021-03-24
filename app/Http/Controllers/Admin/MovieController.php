<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie, App\Member, App\MovieMember;


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
            if ($request->video) {
                $fileName = time() . '.' . $request->video->extension();
                $request->video->move(public_path('uploads/video'), $fileName);
                $add_movie->video  =    $fileName;
            }
            if ($add_movie->save()) {
                $movie_id = $add_movie->id;
                if($data['actor_name']){
                    foreach ($data['actor_name'] as $key => $actor) {
                        $add_actor = new MovieMember;
                        $add_actor->member_id = (int)$actor;
                        $add_actor->movie_id  = $movie_id;
                        $add_actor->type      = 'actor';
                        $add_actor->save();
                    }
                }
                if($data['director']){
                    foreach ($data['director'] as $key => $director) {
                    	$add_director = new MovieMember;
                        $add_director->member_id = (int)$director;
                        $add_director->movie_id  = $movie_id;
                        $add_director->type         = 'director';
                        $add_director->save();
                    }
                }
                if($data['crew_member']){
                    foreach ($data['crew_member'] as $key => $crew_member) {
                        $add_crew_member = new MovieMember;
                        $add_crew_member->member_id = (int)$crew_member;
                        $add_crew_member->movie_id  = $movie_id;
                        $add_crew_member->type            = 'crew-member';
                    	$add_crew_member->save();
                    }
                }
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
