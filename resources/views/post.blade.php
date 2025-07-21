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
        @if ($post->image)
        <div style="max-height: 350px; overflow: hidden">
          <img
            src="{{ asset('storage/' . $post->image) }}"
            alt="{{ $post->category->name }}"
            class="img-fluid img-cover"
          />
        </div>
      @else
        <div style="max-height: 350px; overflow: hidden">
          <img
            src="https://picsum.photos/seed/{{ $post->category->name }}/1200/400"
            alt="{{ $post->category->name }}"
            class="img-fluid img-cover"
          />
        </div>
      @endif
        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>
        <a class="d-block mt-3" href="/blog">Back to Posts</a>
      </div>
    </div>
  </div>
@endsection
