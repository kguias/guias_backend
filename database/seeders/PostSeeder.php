<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'First Post',
            'text' => 'This is my first post.'
        ]);

        Post::create([
            'title' => 'Second Post',
            'text' => 'This is another post.'
        ]);
    }
}
