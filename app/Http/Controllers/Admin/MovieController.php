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
            $add_movie->category        = $data['category'];
            $add_movie->release_date    = date('Y-m-d',strtotime($data['release_date']));
            if ($request->video) {
                $fileName = time() . '.' . $request->video->extension();
                $request->video->move(public_path('uploads/movie/video'), $fileName);
                $video_url = url('public/uploads/movie/video'); 
                $add_movie->video  =    $video_url.'/'.$fileName;
            }
            if ($request->thumbnail) {
                $fileName = time() . '.' . $request->thumbnail->extension();
                $request->thumbnail->move(public_path('uploads/movie/thumbnail'), $fileName);
                $thumbnail_url = url('public/uploads/movie/thumbnail'); 
                $add_movie->thumbnail  =    $thumbnail_url.'/'.$fileName;
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
        $selected_actor_list = [];
        $selected_crew_member_list     = [];
        $selected_director_list        = [];
        $actor_list 		= Member::where('type','Actor')->get()->toArray();
        $crew_member_list 	= Member::where('type','Crew-member')->get()->toArray();
        $director_list 		= Member::where('type','Director')->get()->toArray();
        $label = 'Movie';
        return view('Admin.Movies.form', compact('label','selected_actor_list','selected_director_list','selected_crew_member_list','actor_list','crew_member_list','director_list'));
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data                       = $request->all();
            // dd($data);
            $edit_movie                  = Movie::find($id);
            $edit_movie->name            = $data['name'];
            $edit_movie->tag             = $data['tag'];
            $edit_movie->description     = $data['description'];
            $edit_movie->category        = $data['category'];
            $edit_movie->release_date    = date('Y-m-d',strtotime($data['release_date']));
            if ($request->video) {
                $fileName = time() . '.' . $request->video->extension();
                $request->video->move(public_path('uploads/movie/video'), $fileName);
                $video_url = url('public/uploads/movie/video'); 
                $edit_movie->video  =    $video_url.'/'.$fileName;
            }
            if ($request->thumbnail) {
                $fileName = time() . '.' . $request->thumbnail->extension();
                $request->thumbnail->move(public_path('uploads/movie/thumbnail'), $fileName);
                $thumbnail_url = url('public/uploads/movie/thumbnail'); 
                $edit_movie->thumbnail  =    $thumbnail_url.'/'.$fileName;
            }
            if ($edit_movie->save()) {
                $movie_id = $edit_movie->id;
                $delete_ld_movie_members = MovieMember::where('movie_id',$id)->delete();
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
                return redirect()->back()->with('success', 'Movie Edited successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong, Please try again later.');
            }
        }

        $movie_data         = Movie::where('id',$id)->first();
        $selected_actor_list         = MovieMember::where('movie_id',$id)->where('type','Actor')->get()->pluck('member_id')->toArray();
        $selected_crew_member_list   = MovieMember::where('movie_id',$id)->where('type','Crew-member')->get()->pluck('member_id')->toArray();
        $selected_director_list      = MovieMember::where('movie_id',$id)->where('type','Director')->get()->pluck('member_id')->toArray();
        $actor_list         = Member::where('type','Actor')->get()->toArray();
        $crew_member_list   = Member::where('type','Crew-member')->get()->toArray();
        $director_list      = Member::where('type','Director')->get()->toArray();
        $label = 'Movie';
        return view('Admin.Movies.form', compact('label','actor_list','crew_member_list','director_list','selected_actor_list','selected_crew_member_list','selected_director_list','movie_data'));
    }
  

    public function delete(Request $request, $id)
    {
        $delete = Movie::where('id', $id)->delete();
        MovieMember::where('movie_id',$id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'Movie deleted successfully');
        } else {
            return redirect('admin/category')->with('error', 'Something went wrong, Please try again later.');
        }
    }
}
