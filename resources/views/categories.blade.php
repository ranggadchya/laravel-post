@extends('layouts.main')

@section('content')
  <h3 class="mb-3">Post Categories</h3>

  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4 mb-3">
          <a href="/posts?category={{ $category->slug }}">
            <div class="card text-bg-dark">
              <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img border-0" alt="{{ $category->name }}">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>

@endsection