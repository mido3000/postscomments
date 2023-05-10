<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class postsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_posts_page()
    {
        $response = $this->get('/posts');
        $response->assertStatus(200);
    }

    public function test_creat_post()
    {
        $response = $this->post('/posts', [
            'title' => 'test post',
            'content' => 'test post body',
        ]);
        $response->assertStatus(302)
            ->assertRedirect('/posts');
    }
}
