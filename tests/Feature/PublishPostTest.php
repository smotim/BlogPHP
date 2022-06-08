<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PublishPostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $file = UploadedFile::fake()->image('avatae.jpg');
        $response = $this->post('/post/publish', [
            'heading' => 'tes heading',
            'summary' => 'tet summary',
            'user_name' => 'tes_user',
            'content' => 'tes content',
            'image' => $file
        ]);

        $response->assertStatus(200);
    }
}
