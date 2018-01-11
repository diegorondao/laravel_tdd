<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DatabaseMigrations;
use URL;

class CommentTest extends TestCase
{
    use RefreshDatabase;

    public function test_lista_comment()
    {
        $comment = factory('laravel_tdd\Comment')->create();
        $response = $this->get('/comment');
        $response->assertSee($comment->body);
    }
    
    // public function test_create_comment()
    // {
    //     $post = factory('laravel_tdd\Post')->create();
    //     $response = $this->get('/comment');
    //     $response->assertSee($post->body); 
    // }
}
