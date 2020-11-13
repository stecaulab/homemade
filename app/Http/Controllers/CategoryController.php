<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{



public function all(Post $post, $slug){

        $currentCategory = Category::where('slug', '=', $slug)->first();
        $posts = $currentCategory->posts()
                                         ->orderBy('title')
                                         ->paginate(5);

        return view('category',compact('currentCategory','posts'));
    }




}
