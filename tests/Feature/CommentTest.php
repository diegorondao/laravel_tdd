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

    protected function setUp()
    {
        parent::setUp();
        $this->comment = factory('laravel_tdd\Comment')->create();
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
}
