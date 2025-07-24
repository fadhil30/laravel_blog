@extends('layouts.main')

@section('container')
  {{-- Hero Section --}}
  <section class="py-5 text-center container-fluid bg-light">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Welcome to Our Blog</h1>
        <p class="lead text-muted">
          Discover insightful articles, stories, and tutorials on a variety of
          topics. Dive into our latest content below.
        </p>
        <p>
          <a href="/posts" class="btn btn-primary my-2">Browse All Articles</a>
          <a href="/categories" class="btn btn-secondary my-2">
            Explore Categories
          </a>
        </p>
      </div>
    </div>
  </section>
  {{-- End Hero Section --}}

  <div class="album py-5">
    <div class="container">
      {{-- Latest Posts Section ... (this section is fine) --}}
      <h2 class="pb-2 mb-4 text-center border-bottom">Our Latest Posts</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @if ($posts->count())
          @foreach ($posts as $post)
            <div class="col">
              <div class="card shadow-sm">
                <div
                  class="position-absolute px-3 py-2 text-white"
                  style="background-color: rgba(0, 0, 0, 0.7)"
                >
                  <a
                    href="/posts?category={{ $post->category->slug }}"
                    class="text-white text-decoration-none"
                  >
                    {{ $post->category->name }}
                  </a>
                </div>
                {{-- Image Fallback Logic --}}

                @if ($post->image)
                  <img
                    src="{{ asset('storage/' . $post->image) }}"
                    alt="{{ $post->category->name }}"
                    class="bd-placeholder-img card-img-top"
                    width="100%"
                    height="225"
                  />
                @elseif ($post->category->image)
                  <img
                    src="{{ asset('storage/' . $post->category->image) }}"
                    alt="{{ $post->category->name }}"
                    class="bd-placeholder-img card-img-top"
                    width="100%"
                    height="225"
                  />
                @else
                  <img
                    src="https://picsum.photos/seed/{{ $post->category->name }}/500/400"
                    alt="{{ $post->category->name }}"
                    class="bd-placeholder-img card-img-top"
                    width="100%"
                    height="225"
                  />
                @endif
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <div class="btn-group">
                      <a
                        href="/posts/{{ $post->slug }}"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Read More
                      </a>
                    </div>
                    <small class="text-muted">
                      {{ $post->created_at->diffForHumans() }}
                    </small>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <p class="text-center fs-4">No posts found.</p>
        @endif
      </div>
      {{-- End Latest Posts Section --}}

      {{-- Featured Categories Section --}}
      <h2 class="pb-2 mt-5 mb-4 text-center border-bottom">
        Featured Categories
      </h2>

      <div class="row g-4 py-3 row-cols-1 row-cols-lg-4">
        @foreach ($categories as $category)
          <div class="feature col text-center">
            <a
              href="/posts?category={{ $category->slug }}"
              class="text-decoration-none"
            >
              {{-- FIX 1: REMOVED the "text-bg-primary bg-gradient" classes from this div --}}
              <div
                class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3"
              >
                <div
                  style="
                    width: 1em;
                    height: 1em;
                    background-image: url({{ $category->image ? asset('storage/' . $category->image) : 'https://picsum.photos/seed/' . $category->slug . '/100/100' }});
                    background-size: cover;
                    border-radius: 50%;
                  "
                ></div>
              </div>
              <h3 class="fs-4 fw-semibold text-body-emphasis">
                {{ $category->name }}
              </h3>
              <p class="text-muted">Explore articles</p>
            </a>
          </div>
        @endforeach
      </div>
      {{-- End Featured Categories Section --}}
    </div>
  </div>
@endsection

@push('styles')
  <style>
    .card-img-top {
      object-fit: cover;
    }
    .feature-icon {
      width: 6rem;
      height: 6rem;
      transition: transform 0.2s ease-in-out;
      /* FIX 2: REMOVED the duplicate "border-radius: 0.75rem;" line */
    }

    .feature a {
      color: inherit;
      transition: opacity 0.2s ease-in-out;
    }
    .feature a:hover {
      opacity: 0.8;
    }
    .feature a:hover .feature-icon {
      transform: scale(1.1);
    }
  </style>
@endpush
