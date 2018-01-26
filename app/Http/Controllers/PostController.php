<?php

namespace laravel_tdd\Http\Controllers;

use Illuminate\Http\Request;
use laravel_tdd\Post;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuthException;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['store', 'show', 'create']]);
    }
    
	public function index(Request $request)
    {
        # FORMA 1 #
        // $user = Auth::guard('api')->user(); 
        // return response()->json(['me' => $user]);
     
        # FORMA 2 #
        $user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    	
        # FORMA 3 #
        // $post = new Post();
    	// $posts = $post::latest()->get();
    	// return view('post.index')->with(['posts'=>$posts]);
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
