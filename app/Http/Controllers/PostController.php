<?php

namespace laravel_tdd\Http\Controllers;

use Illuminate\Http\Request;
use laravel_tdd\Post;

class PostController extends Controller
{
	public function index(Post $post)
    {
    	$posts = $post::latest()->get();
    	return view('post.index')->with(['posts'=>$posts]);
    }
    
    public function show(Post $post){
    	
      return view('post.show')->with(['post'=>$post]);
 	}
    
}
