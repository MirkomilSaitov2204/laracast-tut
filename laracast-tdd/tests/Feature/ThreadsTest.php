<?php

namespace Tests\Feature;

use App\Models\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function a_user_can_view_all_threads()
    {
        $thread = Thread::factory()->create();

        $response = $this->get('/threads');

        $response->assertSee($thread->title);
    }

    public function a_user_can_read_a_single_thread()
    {
        $thread = Thread::factory()->create();

        $response = $this->get('/thread/'. $thread);

        $response->assertSee($thread->title);

    }

}
