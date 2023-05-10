<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class commentsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_make_comments()
    {
        $response = $this->post('/posts/comments', [
            'content' => 'Hello World',
            'post_id' => 1
        ]);
        $response->assertStatus(302)->assertRedirect('/posts');
    }
}
