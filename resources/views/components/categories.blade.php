<h1>{{ $currentCategory->name }}</h1>
<div>
    @foreach ($posts as $post)

        <p>title{{ $post->title }}</p>
        <hr>
        <p>body{{ $post->body }}</p>

    @endforeach

</div>
