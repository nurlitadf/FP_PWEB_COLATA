<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class EditProfileController extends Controller
{
    public function index(){
    	
    }

    public function edit(Request $request){
    	$error="";
    	$hash = Hash::make($request->input("password"));
    	$exists = 0;
    	if($request->input("username")!=Auth::user()->username){
    		$exists = User::where('username', $request->input("username"))->count();
    	}
    	if($request->input("email")!=Auth::user()->email){
    		$exists += User::where('email', $request->input("email"))->count();
    	}
    	if(!Hash::check($request->input("password"),Auth::user()->password)){
    		$error="Incorrect password.";
    	}
    	else if($exists==0){
	    	User::where('id', Auth::user()->id)->update(
	    		['name' => $request->input("name")],
	    		['username' => $request->input("username")],
	    		['email' => $request->input("email")]
	    	);
	    	$error="Your profile is updated!";
    	}
    	else{
    		$error="Email/Username has already used.";

    	}
    	$log="";
    	return view("/editprofile", compact('error','log'));
    }

    public function updatepassword(Request $request){
    	$log="";
    	if($request->input("newpassword") != $request->input("newpassword2")){
    		$log="New password didn't match.";
    	}
    	else if(!Hash::check($request->input("oldpassword"),Auth::user()->password)){
    		$log="Incorrect old password.";
    	}
    	else{
	    	User::where('id', Auth::user()->id)->update(
	    		['password' => Hash::make($request->input("newpassword"))]
	    	);
	    	$log="Your password is updated!";
    	}
    	$error="";
    	return view("/editprofile", compact('error','log'));
    }
}
