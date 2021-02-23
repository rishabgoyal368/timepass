<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use App\Admin;
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
        return view('Admin.Users.list',compact('label'));
    }
  
    public function add(Request $request)
    {
        $label = $this->label;
        return view('Admin.Users.add',compact('label'));    
    }
}
