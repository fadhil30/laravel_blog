@extends('layouts.main')

@section('container')
  <style>
    .about-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 3rem 1rem;
      text-align: center;
      background: linear-gradient(to bottom right, #f8fafc, #e2e8f0);
      border-radius: 16px;
      box-shadow: 0 20px 30px rgba(0, 0, 0, 0.05);
      max-width: 600px;
      margin: 0 auto;
    }

    .profile-img {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #fff;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
      margin-bottom: 1.5rem;
      transition: transform 0.3s ease;
    }

    .profile-img:hover {
      transform: scale(1.05);
    }

    .about-name {
      font-size: 2rem;
      font-weight: 700;
      color: #1e293b;
    }

    .about-email {
      font-size: 1.1rem;
      color: #475569;
    }
  </style>

  <div class="about-section">
    <img src="/image/{{ $image }}" alt="{{ $name }}" class="profile-img" />
    <h1 class="about-name">{{ $name }}</h1>
    <p class="about-email">{{ $email }}</p>
  </div>
@endsection
