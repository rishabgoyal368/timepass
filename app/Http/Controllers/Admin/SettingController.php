<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AppSystem, App\Banner;
class SettingController extends Controller
{
    public function app_version(Request $request){

    	if($request->isMethod('post')){
    		$data 				= $request->all();
    		$update_key 		= AppSystem::where('id',1)->update(['data'=>$data['data']]);
    		if($update_key){
    			return redirect()->back()->with('success','App Version Updated Successfully');
    		}else{
    			return redirect()->back()->with('error','Something went wrong, Please try again later.');
    		}
    	}
    	$app_version = AppSystem::where('type','version')->first();
    	$label 	= 'App Version';
    	return view('Admin.Setting.AppVersion.app_version',compact('app_version','label'));
    }

    public function app_key(Request $request){

    	if($request->isMethod('post')){
    		$data 				= $request->all();
    		$update_key 		= AppSystem::where('id',2)->update(['data'=>$data['data'],'data1'=>$data['data1
    			']]);
    		if($update_key){
    			return redirect()->back()->with('success','App Key Updated Successfully');
    		}else{
    			return redirect()->back()->with('error','Something went wrong, Please try again later.');
    		}
    	}
		$app_key = AppSystem::where('type','keys')->first();
    	$label 	= 'App Key';
    	return view('Admin.Setting.AppKey.app_key',compact('app_key','label'));
    }

    public function banner(Request $request){
    	if($request->isMethod('post')){
    		$data 				= $request->all();
    		// dd($data);
    		$update_banner 		= Banner::find(1);
            $set_url = asset('public/uploads/banner'); 
    		if ($request->image1) {
                $fileName = rand(1111111,9999999) . '.' . $request->image1->extension();
                $request->image1->move(public_path('uploads/banner/'), $fileName);
                $update_banner->image1  =    $set_url.'/'.$fileName;
            }
            if ($request->image2) {
                $fileName = rand(1111111,9999999) . '.' . $request->image2->extension();
                $request->image2->move(public_path('uploads/banner/'), $fileName); 
                $update_banner->image2  =    $set_url.'/'.$fileName;
            }
            if ($request->image3) {
                $fileName = rand(1111111,9999999) . '.' . $request->image3->extension();
                $request->image3->move(public_path('uploads/banner/'), $fileName); 
                $update_banner->image3  =    $set_url.'/'.$fileName;
            }
            if ($request->image4) {
                $fileName = rand(1111111,9999999) . '.' . $request->image4->extension();
                $request->image4->move(public_path('uploads/banner/'), $fileName); 
                $update_banner->image4  =    $set_url.'/'.$fileName;
            }
    		if($update_banner->save()){
    			return redirect()->back()->with('success','Banner Updated Successfully');
    		}else{
    			return redirect()->back()->with('error','Something went wrong, Please try again later.');
    		}
    	}
   		$banner = Banner::where('id',1)->first();
    	$label 	= 'Banner';
    	return view('Admin.Setting.Banner.banner',compact('banner','label'));
    }
}
