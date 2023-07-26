@extends('layouts.main')

@section('content')

  <div class="container mb-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2>{{ $post->title }}</h2>
        <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        @if ($post->image)
          <div style="max-height: 350px; width: 100%; overflow: hidden">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" style="width: 100%; object-fit: cover;">
          </div>
        @else
          <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-2">
        @endif
        <article class="my-3 fs-6">
          <small>
            {!! $post->body !!}
          </small>
        </article>
        <a href="/posts" class="btn btn-danger btn-sm mt-2">Back</a>
      </div>
    </div>
  </div>

@endsection