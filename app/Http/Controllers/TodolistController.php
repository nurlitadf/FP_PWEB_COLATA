<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todolist;

class TodolistController extends Controller
{
    //
    public function show(int $id){
        $todolist = Todolist::where('board_id',$id)->get();
        return view('todolist', compact('todolist'));
    }

    public function store(Request $request){
    	Todolist::create($request->all());
        return back();
    }
}
