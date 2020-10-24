<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    /**
     *  Display a listing of the resource.
     *  leggo tutti i ost creati o un singolo post.
     *  cio è possibile perchè il metodo apiResource() definiscele rotte API
     *  utilizzando regole REST standard

     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return PostResource::collection(Post::lastet()->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

                'title'         =>      'required',
                'body'          =>      'required',
                'user_id'       =>      'required',
                'image'         =>      'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $post   = new Post;


        if($request->hasFile('image')) {

            $image              =   $request->file('image');
            $name               =   Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $destinationPath    =   public_path('/uploads/posts');
            $imagePath          =   $destinationPath . "/" . $name;
            $image->move($destinationPath, $name);
            $post->image        = $name;
        }

        $post->user_id          =   $request->user_id;
        $post->title            =   $request->title;
        $post->body             =   $request->body;

        $post->save();

        return new PostResource($post);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * riceve una richiesta e un Post_id come parametri,quindi utilizziamo
     * l'assocoazione del Model per risolver istanza dell'id in un istanza di un post
     * covalidiamo $request e poi aggiorniamo title e body
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [

                'title'     =>      'required',
                'body'      =>      'required',
        ]);

        $post->update($request->only(['title', 'body']));

        return new PostResource($post);
    }

    /**
     * Remove the specified resource from storage.
     *  resolve the Post instance then delete it and return 204 response code
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json(null, 204);
    }


    /**
     * He retrieve five created posts per page and send to landing view.
     * use paginate for show five post for page
     */
     public function all()
    {
        return view('landing',[

                'posts' =>  Post::latest()->paginate(5)
        ]);
    }

    /**
     * Return the view for the single post
     * Usiamo una funzionalità di laravel 'model binding' per mappare ilparametro URL
     * a un istanza Post con lo stesso ID
     */

    public function single(Post $post){

        return view('single', compact('post'));
    }
}
