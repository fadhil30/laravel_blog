{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
  <h1 class="my-4 pb-4 text-center">{{ $title }}</h1>

  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
          <input
            type="hidden"
            name="category"
            value="{{ request('category') }}"
          />
        @endif

        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}" />
        @endif

        <div class="input-group mb-3">
          <input
            type="text"
            name="search"
            class="form-control"
            placeholder="Search..."
            aria-label="search"
          />
          <button class="btn btn-primary" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($search_query)
    <h4 class="mb-3">
      Search result for:
      <strong>{{ $search_query }}</strong>
    </h4>
  @endif

  @if ($posts->count())
    <div class="card mb-3">
      @if ($posts[0]->image)
        <div style="max-height: 400px; overflow: hidden">
          <img
            src="{{ asset('storage/' . $posts[0]->image) }}"
            alt="{{ $posts[0]->category->name }}"
            class="img-fluid img-cover"
          />
        </div>
      @elseif ($posts[0]->category->image)
        <img
          src="{{ asset('storage/' . $posts[0]->category->image) }}"
          alt="{{ $posts[0]->category->name }}"
          class="img-fluid img-cover"
        />
      @else
        <div style="max-height: 350px; overflow: hidden">
          <img
            src="https://picsum.photos/seed/{{ $posts[0]->category->name }}/1200/400"
            class="card-img-top"
            alt="{{ $posts[0]->category->name }}"
          />
        </div>
      @endif

      <div class="card-body text-center">
        <h5 class="card-title">
          <a
            class="text-decoration-none text-dark"
            href="/posts/{{ $posts[0]->slug }}"
          >
            {{ $posts[0]->title }}
          </a>
        </h5>
        <small class="text-muted">
          <p>
            By:
            <a
              class="text-decoration-none"
              href="/posts?author={{ $posts[0]->author->username }}"
            >
              {{ $posts[0]->author->name }}
            </a>
            in
            <a
              class="text-decoration-none"
              href="/posts?category={{ $posts[0]->category->slug }}"
            >
              {{ $posts[0]->category->name }}
            </a>
            {{ $posts[0]->created_at->diffForHumans() }}
          </p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a
            class="text-decoration-none btn btn-primary"
            href="/posts/{{ $posts[0]->slug }}"
          >
            Read more
          </a>
        </small>
      </div>
    </div>

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mb-3">
            <div class="card">
              <div
                class="position-absolute p-2 text-white"
                style="background-color: rgba(0, 0, 0, 0.7)"
              >
                <a
                  class="text-white text-decoration-none"
                  href="/posts?category={{ $post->category->slug }}"
                >
                  {{ $post->category->name }}
                </a>
              </div>

              @if ($post->image)
                <img
                  src="{{ asset('storage/' . $post->image) }}"
                  alt="{{ $post->category->name }}"
                  class="img-fluid img-cover"
                />
              @elseif ($post->category->image)
                <img
                  src="{{ asset('storage/' . $post->category->image) }}"
                  alt="{{ $post->category->name }}"
                  class="img-fluid img-cover"
                />
              @else
                <img
                  src="https://picsum.photos/seed/{{ $post->category->name }}/500/400"
                  class="card-img-top"
                  alt="{{ $post->category->name }}"
                />
              @endif

              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <small class="text-muted">
                  <p>
                    By:
                    <a
                      class="text-decoration-none"
                      href="/posts?author={{ $post->author->username }}"
                    >
                      {{ $post->author->name }}
                    </a>
                    {{ $post->created_at->diffForHumans() }}
                  </p>
                </small>
                <p>{{ $post->excerpt }}</p>
                <a
                  class="text-decoration-none btn btn-primary"
                  href="/posts/{{ $post->slug }}"
                >
                  Read more
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @else
    <p class="text-center fs-4">No Post Found.</p>
  @endif

  <div class="d-flex justify-content-end">
    {{ $posts->links() }}
  </div>
@endsection
