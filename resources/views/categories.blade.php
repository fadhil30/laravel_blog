@extends('layouts.main')

@section('container')
  {{-- Hero Section for the Title --}}
  <div class="container-fluid px-4 py-5 mb-4 bg-light">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="display-4 fw-bold">Explore Our Categories</h1>
        <p class="fs-5 text-muted">
          Find articles and stories on topics that interest you most.
        </p>
      </div>
    </div>
  </div>

  {{-- Category Cards Section --}}
  <div class="container">
    <div class="row g-4">
      @forelse ($categories as $category)
        <div class="col-md-6 col-lg-4">
          <a
            href="/posts?category={{ $category->slug }}"
            class="text-decoration-none text-white"
          >
            <div class="card category-card border-0 shadow-sm overflow-hidden">
              <img
                src="{{ $category->image ? asset('storage/' . $category->image) : 'https://picsum.photos/seed/' . $category->slug . '/500/500' }}"
                class="card-img category-card-img"
                alt="{{ $category->name }}"
              />
              {{-- FIX: Reverted to the previous overlay style for permanent visibility --}}
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5
                  class="card-title text-center flex-fill p-4 fs-3 text-white"
                  style="background-color: rgba(0, 0, 0, 0.7)"
                >
                  {{ $category->name }}
                </h5>
              </div>
            </div>
          </a>
        </div>
      @empty
        <div class="col">
          <p class="text-center fs-4 text-muted mt-5">
            No categories found at this time.
          </p>
        </div>
      @endforelse
    </div>
  </div>
@endsection

@push('styles')
  <style>
    .category-card {
      transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
      min-height: 280px;
    }

    .category-card:hover {
      transform: scale(1.05); /* Zoom effect on hover */
      box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }

    .category-card-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .category-card:hover .category-card-img {
      transform: scale(1.1);
    }
  </style>
@endpush
