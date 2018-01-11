<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PDO;

class PostTest extends TestCase
{	
    use RefreshDatabase;
    
	private $comment;

	protected function setUp()
	{
		parent::setUp();
	}
    
    public function testExample()
    {
        $this->assertTrue(true);
    }
    
    public function test_lista_comment()
    {
    	$this->assertTrue(true);	
    }

    public function test_create_comment()
    {
    	$this->assertTrue(true);	
    }

    public function test_update_comment()
    {
    	$this->assertTrue(true);	
    }

    public function test_delete_comment()
    {
    	$this->assertTrue(true);	
    }

    protected function tearDown()
    {
    	parent::tearDown();
    }
}
