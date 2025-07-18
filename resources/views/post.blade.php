@extends('layouts.main')

@section('container')
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-8">
        <h1 class="my-5">{{ $post->title }}</h1>
        <p>
          By:
          <a
            class="text-decoration-none"
            href="/posts?author={{ $post->author->username }}"
          >
            {{ $post->author->name }}
          </a>
          ,
          <a
            class="text-decoration-none"
            href="/posts?category={{ $post->category->slug }}"
          >
            {{ $post->category->name }}
          </a>
        </p>
        <img
          src="https://picsum.photos/seed/{{ $post->category->name }}/1200/400"
          alt="{{ $post->category->name }}"
          class="image-fluid"
        />
        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
        <a class="d-block mt-3" href="/blog">Back to Posts</a>
      </div>
    </div>
  </div>
@endsection
