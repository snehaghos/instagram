<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = Storage::disk('local')->get('/json/post.json');

         $list = json_decode($json, true);

         foreach ($list as $item) {

             Post::query()->updateOrCreate([
                 'id' => $item['id'],
                 'post_title' => $item['post_title'],
                 'post_description' => $item['post_description'],
                 'post_image' => $item['post_image'],
                 'user_id' => $item['user_id'],
                 'created_at' => $item['created_at'],
                 'updated_at' => $item['updated_at'],
             ]);
         }

    }
}

