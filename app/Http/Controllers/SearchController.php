<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {

        return view('search');
    }

    public function search(Request $request){

        $categories = Category::all();

        $find = ($request->input('q'));

        if($find)
        {

            $posts = Post::where('title','LIKE','%'.$find.'%')
                    ->orWhere('body','LIKE','%'.$find.'%')
                    ->get();

        }
        return view('search',compact('posts','categories','find'));
    }


}
