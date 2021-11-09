<?php

namespace Database\Seeders;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threads = Thread::all();
        $threads->each(function($thread){
            Reply::factory(10)->create(['thread_id'=> $thread->id]);
        });
    }
}
