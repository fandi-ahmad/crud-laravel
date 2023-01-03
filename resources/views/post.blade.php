@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ini halaman post</h1>

    @foreach($post as $post)
        <article>
            <h2>
                <a href="/post/1">{{ $post->title }}</a>
                {{-- <a href="/post/{{ $post->id }}">{{ $post->title }}</a> --}}
            </h2>
            <p>{{ $post->id }}</p>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach


</div>
@endsection