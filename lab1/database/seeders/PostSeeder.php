<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostFactory::times(500)->create();
       // Post::factory()->count(20)->create();
    }
}