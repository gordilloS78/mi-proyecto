<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function create(){

    		return view('admin.users.create');

    }

    public function store(Request $request){

    	$user = new User($request->all());
    	$user->password = bcrypt($request->password);

    	
    	$user->save();
    }


    public function index(){
    	$users = User::orderBy('id','ASC')->paginate(5);
    	return view('admin.users.index')->with('users',$users);

    }
}
