@extends('dashboard.layouts.main')

@section('container')
  <div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"
  >
    <h1>Posts Categories</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive col-lg-6">
    <a class="btn btn-success my-2" href="/dashboard/categories/create">
      <i class="bi bi-plus"></i>
      Create new category
    </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
              <a
                class="badge bg-warning"
                href="/dashboard/categories/{{ $category->slug }}/edit"
              >
                <i class="bi bi-pencil-square"></i>
              </a>
              <form
                action="/dashboard/categories/{{ $category->slug }}"
                method="POST"
                class="d-inline"
              >
                @method('delete')
                @csrf
                <button
                  class="badge bg-danger border-0"
                  onclick="return confirm('Are you sure?')"
                >
                  <i class="bi bi-trash3"></i>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
