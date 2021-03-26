<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;

class ActorManagementController extends Controller
{
    public function index(Request $request)
    {
        $label = @$_GET['type'] ?: 'Actor';
        $members = Member::where('type',$label)->get();
        return view('Admin.Member.list', compact('label', 'members'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $data                       = $request->all();
            $add_actor                  = new Member;
            $add_actor->first_name      = $data['first_name'];
            $add_actor->last_name       = $data['last_name'];
            $add_actor->address         = $data['address'];
            $add_actor->gender          = $data['gender'];
            $add_actor->type            = $data['type'];
            if ($request->image) {
                $fileName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads'), $fileName);
                $add_actor->image  =    $fileName;
            }
            if ($add_actor->save()) {
                return redirect('admin/member/?type='.$_GET['type'].'')->with('success', $_GET['type'].' added successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong, Please try again later.');
            }
        }
        $label = $_GET['type'];
        return view('Admin.Member.form', compact('label'));
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $data                       = $request->all();
            $add_actor                  = Member::find($id);
            $add_actor->first_name      = $data['first_name'];
            $add_actor->last_name       = $data['last_name'];
            $add_actor->address         = $data['address'];
            $add_actor->gender          = $data['gender'];
            $add_actor->type            = $data['type'];
            if ($request->image) {
                $fileName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads'), $fileName);
                $add_actor->image  =    $fileName;
            }
            if ($add_actor->save()) {
                return redirect('admin/member?'.$data['type'])->with('success', $_GET['type'].' Edited successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong, Please try again later.');
            }
        }
        $member_details = Member::where('id', $id)->first();
        $label = $_GET['type'];
        return view('Admin.Member.form', compact('label', 'member_details'));
    }

    public function delete(Request $request, $id)
    {
        $delete = Member::where('id', $id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'Member deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong, Please try again later.');
        }
    }
}
