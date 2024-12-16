<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // サンプルデータを挿入
        Post::create([
            'title' => 'First Post',
            'content' => 'This is the content of the first post.',
            'userId' => 1
        ]);

        Post::create([
            'title' => 'Second Post',
            'content' => 'Content for the second post goes here.',
            'userId' => 1
        ]);
    }
}
