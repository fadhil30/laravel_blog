@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By: <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>, <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a class="d-block mt-3" href="/blog">Back to Posts</a>
@endsection
