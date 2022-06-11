<?php

namespace Tests\Unit;

use App\Models\News;
use PHPUnit\Framework\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_pagination()
    {
        $response = $this->post('?page=2');
        $response->assertStatus(200);
    }
}
