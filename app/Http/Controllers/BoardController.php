<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class BoardController extends Controller
{
    public function show(int $id){
    	$todolists = Board::where('user_id',id)->get();
    	foreach ($todolists as $todolist) {
    		echo $todolist->id;
    	}
    }

    public function create(){
    	
    }

    public function store(Request $request){
        Board::create($request->all());
        return back();
    }
}
