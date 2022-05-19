<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i = 0; $i < 25 ; $i++) { 
            $newPost = new Post();
            $newPost->img_url = "https://picsum.photos/id/$i/400/650";
            $newPost->title = $faker->sentence(5);
            $newPost->author = $faker->name();
            $newPost->description = $faker->paragraph(5, true);
            $newPost->save();
        }   
    }
}