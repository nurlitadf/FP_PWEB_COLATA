<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;

class BoardController extends Controller
{
    public function index(Request $request){
        $boards = Board::all();
        return view('board', compact('boards'));
    }

    public function create(){
    	
    }

    public function store(Request $request){
        Board::create($request->all());
        return back();
    }
}
