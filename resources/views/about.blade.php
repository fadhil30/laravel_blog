@extends('layouts.main')
@section('container')
  <style>
    .profile-img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #fff;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }
  </style>
  <h1>About Page</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $email }}</p>
  <img src="image/{{ $image }}" alt="{{ $name }}" class="profile-img" />
@endsection
