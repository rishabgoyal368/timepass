<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use App\User;
use Auth;

class UsersController extends Controller
{
    protected $label;
    public function __construct()
    {
        // $this->middleware('auth:admin');
        $this->label = 'User';
    }
    public function index(Request $request)
    {
        $label = $this->label;
        $users = User::get();
        return view('Admin.Users.list', compact('label', 'users'));
    }

    public function add(Request $request, $id = null)
    {
        try {
            if ($request->isMethod('GET')) {
                if ($id) {
                    $formLabel = 'Edit';
                    $user = User::findorFail($id);
                } else {
                    $user = [];
                    $formLabel = 'Add';
                }
                $label = $this->label;
                return view('Admin.Users.add', compact('label', 'formLabel', 'user'));
            } else if ($request->isMethod('POST')) {
                $data = $request->all();
                $validator =  Validator::make($data, [
                    'first_name' =>  'required',
                    'email' => 'required|email',
                    'mobile_number' => 'required|numeric',
                    'status' => 'required',
                    'password' => @$data['id'] ? 'nullable' : 'required|confirmed',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator->errors());
                }
                $user = User::find($request['id']);
                if ($request['id']) {
                    
                    $msz =  'Updated';
                } else {
                    $msz =  'Added';
                }
                $users =  User::addEdit($data);
                $msz = $request['id'] ? 'Updated' : 'Added';
                return redirect('manage-users')->with(['success', 'User ' . $msz . ' Successfully']);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
