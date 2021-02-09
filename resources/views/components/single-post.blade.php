
@section('singlecontent')
<div class="container mt-5">
    <section class="article-header">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img class="img-fluid rounded" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placehold.it/750x300' !!} " alt="">
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="date-category">
                    @foreach ($post->categories as $category)
                    <a href="{{ url('category/' . $category->slug) }}"> {{ $category->name }} </a>  -
                    @endforeach
                    {{ $post->created_at->format('F d, Y') }}
                 </div>
                 <div class="article-title">
                    <h1>
                        {{ $post->title }}
                    </h1>

                 </div>
             </div>
         </div>
    </section>
    <section class="article-content">
        <div class="row">
           <div class="col-sm-12 col-md-12">
                <div>
                    <p>{{ $post->body }}</p>
                </div>
           </div>
        </div>
    </section>

    <section class="article-comment">
      @auth
      <hr>
      <div class="card my-4">
        <div class="card-body">
                <comment-component
                        :post-id = '@json($post->id)'
                        :user-name = '@json(auth()->user()->name)'
                >

                </comment-component>

        </div>
      </div>
      @endauth
    </section>
</div>

@endsection
