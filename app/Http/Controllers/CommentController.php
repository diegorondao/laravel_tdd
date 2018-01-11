<?php

namespace laravel_tdd\Http\Controllers;

use Illuminate\Http\Request;
use laravel_tdd\Comment;

// Lista todas as tabelas do SQLITE	
//DB::select('select * from sqlite_master where type="table"')
class CommentController extends Controller
{
	public function index(Comment $comment)
    {
    	$comments = $comment::latest()->get();
    	return view('comment.index')->with(['comments'=>$comments]);
    }
    
    public function show(Comment $comment){
      return view('comment.show')->with(['comment'=>$comment]);
 	}
    
}
