@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ini halaman single post</h1>

    @foreach($post as $post)
        <article>
            <h2>
                <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->body }}</p>
        </article>
    @endforeach


</div>
@endsection