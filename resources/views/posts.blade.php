@extends('layouts.main')

@section('content')

  <div class="row justify-content-between align-items-center mb-3">
    <div class="col-md-6">
      <h4 class="text-uppercase">{{ $title }}</h4>
    </div>
    <div class="col-md-6">
      <form action="/posts">
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
          <button class="btn btn-danger btn-sm" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())
    <div class="card mb-3">
      @if ($posts[0]->image)
        <div style="max-height: 350px; overflow: hidden">
          <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" width="100%">
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
      @endif
      <div class="card-body text-center">
        <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
        <p>
          <small class="text-body-secondary">
            By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
          </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary btn-sm">Read More</a>
      </div>
    </div>

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post) 
          <div class="col-md-3 mb-3">
            <div class="card" style="width: 18rem;">
              <div class="position-absolute fs-6 py-2 px-3" style="background-color: rgba(0,0,0,0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white fw-semibold"><small>{{ $post->category->name }}</small></a></div>
              @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="card-img-top">
              @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="card-img-top">
              @endif
              <div class="card-body">
                <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                <p>
                  <small class="text-body-secondary">
                    By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                  </small>
                </p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @else
    <p class="text-center fs-4">No Post Found</p>
  @endif

  {{ $posts->links() }}

@endsection