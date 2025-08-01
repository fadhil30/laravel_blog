@extends('dashboard.layouts.main')

@section('container')
  <div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
  >
    <h1 class="h2">Create New Category</h1>
  </div>

  <div class="col-lg-8">
    <form
      method="POST"
      action="/dashboard/categories"
      class="my-5"
      enctype="multipart/form-data"
    >
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input
          type="text"
          class="form-control @error('name') is-invalid @enderror"
          id="name"
          name="name"
          required
          value="{{ old('name') }}"
        />
        @error('title')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input
          type="text"
          class="form-control @error('slug') is-invalid @enderror"
          id="slug"
          name="slug"
          required
          value="{{ old('slug') }}"
        />
        @error('slug')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Category image</label>
        <img class="img-preview img-fluid mb-3 col-sm-5" />
        <input
          class="form-control @error('name') is-invalid @enderror"
          type="file"
          id="image"
          name="image"
          onchange="previewImage()"
        />
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
  </div>

  {{-- Blocked By Netscope --}}
  {{--
    <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    
    title.addEventListener('change', function () {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then((response) => response.json())
    .then((data) => (slug.value = data.slug));
    });
    </script>
  --}}

  {{-- Alternative way for auto fill slug --}}
  <script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('keyup', function () {
      let preslug = name.value;
      preslug = preslug.replace(/ /g, '-');
      slug.value = preslug.toLowerCase();
    });

    document.addEventListener('trix-file-accept', function (e) {
      e.preventDefault();
    });

    function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
      };
    }
  </script>
@endsection
