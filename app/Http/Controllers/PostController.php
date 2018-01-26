<?php

namespace laravel_tdd\Http\Controllers;

use Illuminate\Http\Request;
use laravel_tdd\Post;

class PostController extends Controller
{
	public function __construct()
	{
        $this->middleware('jwt.auth', ['except' => ['store', 'show', 'create']]);
    }
	public function index()
    {
    	dd("asdadsad");
    	$posts = $post::latest()->get();
    	return view('post.index')->with(['posts'=>$posts]);
    }
    
    public function show(Post $post){
    	
		return view('post.show')->with(['post'=>$post]);
 	}
    
    public function store(Post $post)
    {
    	$data = $request->all();

    	$post = new Post();
        $post->fill($data);
        $post->save();

        return response()->json($post, 201);
 	}


    
}
