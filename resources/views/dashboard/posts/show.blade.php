@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-8">
        <a class="btn btn-success my-3" href="/dashboard/posts">
          <i class="bi bi-arrow-left-short"></i>
          Back to all my posts
        </a>
        <a
          class="btn btn-warning my-3"
          href="/dashboard/posts/{{ $post->slug }}/edit"
        >
          <i class="bi bi-pencil-square"></i>
          Edit
        </a>
        <form
          action="/dashboard/posts/{{ $post->slug }}"
          method="POST"
          class="d-inline"
        >
          @method('delete')
          @csrf
          <button
            class="btn btn-danger my-3 border-0"
            onclick="return confirm('Are you sure?')"
          >
            <i class="bi bi-trash3"></i>
            Delete
          </button>
        </form>
        <h1 class="my-3">{{ $post->title }}</h1>
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
      </div>
    </div>
  </div>
@endsection
