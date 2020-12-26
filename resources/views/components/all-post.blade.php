
@section('title')Home Page

@endsection
@section('content')
<section class="ff-home-content-section container-fluid">
<div class="ff-welcome-title-box">
    <h1 class="ff-welcome-title">Welcome to the Blog </h1>
</div>
    <div class="row row-cols-1 row-cols-md-4 g-3">
        @foreach ($posts as $post)
            <div class="col mb-5" id="postCard">
                <div class="card h-100">
                    <img class="card-img-top" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placeholder.com/750x300' !!} " alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ $post->title }}</h4>
                            <p class="card-text"> {{ Str::limit($post->body, $limit = 280, $end = '...') }} </p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-outline-dark">Leggi Tutto &rarr;</a>
                        </div>

                        <div class="ff-card-footer text-muted">
                            <div class="ff-footer-cat">
                            <p> Posted {{ $post->created_at->diffForHumans() }} by:
                                    <a href="#">{{ $post->user->name }} </a>
                                </p>
                                <p>
                                    <h6>Categoria:</h6>

                                    @foreach ($post->categories as $category)
                                        <a href="{{ url('category/' . $category->slug) }}">{{ $category->name }}</a>
                                    @endforeach
                                </p>
                        </div>
                        </div>
                </div>
             </div>
        @endforeach
    </div>
</section>
{{ $posts->links() }}
@endsection




