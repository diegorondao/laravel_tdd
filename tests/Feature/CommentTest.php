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
    
    private $comment;
    private $post;
    
    protected function setUp()
    {
        parent::setUp();
        $this->comment = factory('laravel_tdd\Comment')->create();
        $this->post = factory('laravel_tdd\Post')->create();
    }

    public function test_lista_comment()
    {
        $response = $this->get('/comment');
        $response->assertSee($this->comment->body);
    }
    
    public function test_list_unique_comment()
    {
        $response = $this->get('/comment/ '. $this->comment->body);
        $response->assertSee($this->comment->body); 
    }

    /* 
    public function test_guest_can_see_comment_when_visit_single_post()
    {
        // Given a Post
        $post = factory('laravel_tdd\Post')->create();
        // and Post have comments
        $comment = factory('laravel_tdd\Comment')->create(['post_id'=>$post->id]);
        // then I visit single post page
        $response = $this->get(' /comment/'.$post->id);
        // I’ve see the comment
        $response->assertSee($comment->body);
    }*/
}
