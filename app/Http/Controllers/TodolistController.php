<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodolistController extends Controller
{
    //
    public function index(Request $request){
        $todolist = Todolist::all();
        return view('board', compact('todolist'));
    }
}
