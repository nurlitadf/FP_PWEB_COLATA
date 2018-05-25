<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;
use Auth;
use App\Userboard;

class BoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        $boards = Board::crossjoin('userboards','boards.id','userboards.board_id')->where('userboards.user_id','=',Auth::user()->id)->get();
        return view('board', compact('boards'));
    }

    public function create(){
    	
    }

    public function store(Request $request){
        Board::insert(
            ['title'=>$request->input('title'),'background'=>$request->input('background')]
        );
        $board_id = Board::where('title',$request->input('title'))->max('id');
        Userboard::insert([
            ['user_id'=>$request->input('user_id'), 'board_id'=>$board_id]
        ]);
        return back();
    }

    public function update(){
        $data = request()->all();
        $title = $data['title'];
        $boardid = $data['board_id'];

        Board::where('id',$boardid)->update(
            ['title' => $title]
        );

        return response()->json(array('msg'=> $title), 200);
    }
}
