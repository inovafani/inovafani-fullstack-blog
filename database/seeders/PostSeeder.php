<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Post Pertama',
            'slug' => Str::slug('Post Pertama'),
            'content' => '<p>Ini kontent post pertama.</p>',
        ]);

        Post::create([
            'title' => 'Post Kedua',
            'content' => '<p>Ini kontent post kedua</p>',
        ]);
    }
}

?>