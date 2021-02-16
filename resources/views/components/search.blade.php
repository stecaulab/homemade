
@section('searchResult')

<div class="container">

@if (count($posts)>=1)
    <div class="row search-result">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="search-title">

                Search Results for: <span>{{ $find }}</span>
            </h1>
        </div>
        @foreach ($posts as $post)
            <div class="col-sm-12 col-md-4 col-lg-4  mb-5" id="postCard">
                <div class="card h-100">
                    <a href="/posts/{{ $post->slug }}">
                        <img class="card-img-top" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placeholder.com/750x300' !!} " alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="/posts/{{ $post->slug }}">
                            <h2 class="card-title">{{ $post->title }}</h2>
                        </a>
                    </div>
                        <div class="ff-card-footer text-muted">
                            <div class="ff-footer-cat">
                            <span>
                                @foreach ($post->categories as $category)
                                    <a href="{{ url('category/' . $category->slug) }}">{{ $category->name }}</a>  -
                                @endforeach
                                    {{ $post->created_at->format('F d, Y') }}
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
@else
    <div class="row no-search-result">
        <div class="col-sm-12 col-md-12 col-lg-12 ">
            <h2>Sorry, but nothing matched your search terms. Please try again with some different keywords. </h2>
        </div>
    </div>
@endif
    </div>
</div>
@endsection
