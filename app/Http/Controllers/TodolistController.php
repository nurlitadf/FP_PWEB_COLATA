<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todolist;
use App\Userboard;
use App\User;
use App\Board;
use Auth;

class TodolistController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(int $id){
        $todolist1 = Todolist::where('board_id',$id)->where('status',1)->orderBy('deadline','asc')->get(); //todo
        $todolist2 = Todolist::where('board_id',$id)->where('status',2)->orderBy('deadline','asc')->get(); //doing
        $todolist3 = Todolist::where('board_id',$id)->where('status',3)->orderBy('deadline','asc')->get(); //done
        
        $user = Userboard::crossJoin('users','userboards.user_id','users.id')->where('userboards.board_id',$id)->get();
        $board = Board::where('id',$id)->first();
        $exists=Userboard::crossJoin('users','userboards.user_id','users.id')->where('userboards.board_id',$id)->where('userboards.user_id', Auth::user()->id)->count();
        
        if($exists===0) return redirect('/home');
        else return view('todolist', compact('todolist1','todolist2','todolist3','id', 'user', 'board'));
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

    public function update_status(Request $request){
        Todolist::where('id', $request->input('id'))->update(['status' => $request->input('status')]);
        return back();
    }

    public function delete(int $id){
        Todolist::where('id',$id)->delete();
        return back();
    }
}
