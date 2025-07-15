{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
  <h1 class="my-4 pb-4">{{ $title }}</h1>

  @if ($posts->count())
    <div class="card mb-3">
      <img src="https://picsum.photos/seed/{{ $posts[0]->category->name }}/1200/400" class="card-img-top"
        alt="{{ $posts[0]->category->name }}">
      <div class="card-body text-center">
        <h5 class="card-title"><a class="text-decoration-none text-dark"
            href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
        <small class="text-muted">
          <p>By: <a class="text-decoration-none"
              href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
            in <a class="text-decoration-none"
              href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
            {{ $posts[0]->created_at->diffForHumans() }}
          </p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a>
        </small>
      </div>
    </div>
  @else
    <p class="text-center fs-4">No Post Found.</p>
  @endif

  <div class="container">
    <div class="row">
      @foreach ($posts as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="position-absolute p-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
              <a class="text-white text-decoration-none"
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </div>
            <img src="https://picsum.photos/seed/{{ $post->category->name }}/500/500" class="card-img-top"
              alt="{{ $post->category->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <small class="text-muted">
                <p>By: <a class="text-decoration-none"
                    href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                  {{ $post->created_at->diffForHumans() }}
                </p>
              </small>
              <p>{{ $post->excerpt }}</p>
              <a class="text-decoration-none btn btn-primary" href="/posts/{{ $post->slug }}">Read more</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
