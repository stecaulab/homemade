<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\Events\CommentSent;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function store(Post $post)
   {
       $this->validate(request(),[

            'body' => 'required',

       ]);

       $user = auth()->user();

       $comment = Comment::create([

            'user_id'   =>  $user->id,
            'post_id'   =>  $post->id,
            'body'      =>  request('body'),

       ]);

        broadcast(new CommentSent($user ,$comment))->toOthers();

        return ['status' => 'Messaggio Inviato'];
   }

   public function index(Post $post)
   {
       return $post->comments()->with('user')->get();
   }
}
