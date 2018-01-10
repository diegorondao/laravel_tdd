<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DatabaseMigrations;
use URL;

class CommentTest extends TestCase
{
    // public function test_lista_comment()
    // {
	   //  $response = $this->get(URL::secure('/comment'));
	   //  dd($response);
	   //  $response->assertStatus(200);
    // }
    public function test_create_comment()
    {
        $post = factory('laravel_tdd\User')->create();
        $response = $this->get('/comment');
        $response->assertSee($post->title); // expect to see post
    }
}
