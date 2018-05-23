<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todolist;
use App\Userboard;
use App\User;
use Auth;

class TodolistController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(int $id){
        $todolist = Todolist::where('board_id',$id)->get();
        $user = Userboard::crossJoin('users','userboards.user_id','users.id')->where('userboards.board_id',$id)->get();
        $exists=Userboard::crossJoin('users','userboards.user_id','users.id')->where('userboards.board_id',$id)->where('userboards.user_id', Auth::user()->id)->count();
        if($exists===0) return redirect('/home');
        else return view('todolist', compact('todolist','id', 'user','error'));
    }

    public function store(Request $request){
    	Todolist::create($request->all());
        return back();
    }

    public function adduser(Request $request){
        $user_id = User::select('id')->where('username',$request->input('username'))->max('id');
        Userboard::insert(
            ['user_id'=>$user_id, 'board_id'=>$request->input('board_id')]
        );
        return back();
    }
}
