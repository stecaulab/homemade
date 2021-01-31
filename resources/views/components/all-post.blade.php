
@section('title')Home Page

@endsection
@section('content')
<section class="ff-home-content-section">
<div class="ff-welcome-title-box">
<div class="gradient-hm-stong-light triangle-background justify-content-md-center triangle-top">
    <div class="triangle-svg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon fill="white" points="100,100 100,0 0,0"></polygon>
        </svg>
    </div>
    <div class="row">
        <div class="col-sm-1 col-md-12 col-lg-12 text-center">
            <h1 class="ff-welcome-title">LEGGI GLI ULTIMI ARTICOLI</h1>
            <i class="fas fa-chevron-down fa-5x pt-5"></i>
        </div>
    </div>
</div>
<div class="gradient-hm-stong-light triangle-background justify-content-md-center triangle-bottom">
    <div class="triangle-svg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon fill="white" points="0,0 100,0 100,100"></polygon>
        </svg>
    </div>
</div>
</div>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-3">
        @foreach ($posts as $post)
            <div class="col  mb-5" id="postCard">
                <div class="card h-100">
                    <img class="card-img-top" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placeholder.com/750x300' !!} " alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ $post->title }}</h4>
                            <p class="card-text"> {{ Str::limit($post->body, $limit = 60, $end = '...') }} </p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-outline-mybtnhover">Leggi Tutto &rarr;</a>
                        </div>

                        <div class="ff-card-footer text-muted">
                            <div class="ff-footer-cat">
                            <p> Posted {{ $post->created_at->format('d-m-Y') }} by:
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
</div>
</section>
<section class="pt-5 pb-5">
    {{ $posts->links() }}
</section>
@endsection




