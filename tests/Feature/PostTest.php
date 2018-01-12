<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DatabaseMigrations;

class PostTest extends TestCase
{
    use RefreshDatabase;
    
    private $post;
    private $comment;

    protected function setUp()
    {
        parent::setUp();
        $this->post = factory('laravel_tdd\Post')->create();
        $this->comment = factory('laravel_tdd\Comment')->create(['post_id'=>$this->post->id]);
    }

    public function test_lista_post()
    {
        $response = $this->get('/post');
        $response->assertSee($this->post->title);
    }
    
    public function test_list_unique_post()
    {
        $response = $this->get('/post/ '. $this->post->id);
        $this->assertEquals('200', $response->getStatusCode());
        $response->assertSee($this->post->title); 
    }
    public function test_post_list_comments_single_post()
    {
        $response = $this->get('/post/ '. $this->post->id);
        $this->assertEquals('200', $response->getStatusCode());
    }
// Lista todas as tabelas do SQLITE 
//DB::select('select * from sqlite_master where type="table"')
}
