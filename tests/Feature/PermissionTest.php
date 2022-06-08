<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PermissionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_posting()
    {
        $response = $this->get('/post');

        $response->assertStatus(500);
    }

    public function test_root(){
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function  test_news(){
        $response = $this->get('/news');

        $response->assertStatus(200);

    }
}
