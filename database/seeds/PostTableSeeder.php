<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->user_id = 2;
        $post->title="Using Laravel seeder";
        $post->body = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint facilis magnam quam est doloribus eum officia. Doloremque, consectetur et a dolor vero sed explicabo atque consequuntur assumenda tempore beatae quasi dolores quia sint quidem ipsa laborum repellat debitis officiis, nisi ea nobis, vel accusamus. Ut illum molestiae aperiam officiis nemo!";
        $post->save();

        $post = new Post();
        $post->user_id = 2;
        $post->title="database Migrations";
        $post->body = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aliquid nisi corrupti molestiae sapiente laborum quasi expedita ullam ipsa necessitatibus?";
        $post->save();

    }
}
