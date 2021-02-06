
@section('searchResult')


@if (count($posts)>=1)
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
@else
<h1>Sorry, but nothing matched your search terms. Please try again with some different keywords. </h1>
@endif
@endsection
