@extends('dashboard.layouts.main')

@section('content')

<div class="pagetitle">
  <h1>{{ $title }}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/dashboard/posts">All Posts</a></li>
      <li class="breadcrumb-item active">{{ auth()->user()->name }}</li>
    </ol>
  </nav>
</div>

<hr>

<section class="section-dashboard">
  <div class="row">
    <div class="col-md-8">
      <h5 class="text-uppercase fw-semibold">{{ $post->title }}</h5>
      <a href="/dashboard/posts" class="btn btn-success btn-sm align-items-center"><i data-feather="arrow-left" style="width: 1rem"></i> Back to all my posts</a>
      <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm align-items-center"><i data-feather="edit" style="width: 1rem"></i> Edit</a>
      <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" class="d-flex align-items-center"><i data-feather="trash" style="width: 1rem"></i> Delete</button>
      </form>

      @if ($post->image)
        <div style="max-height: 350px; overflow: hidden">
          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-2">
        </div>
      @else
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-2">
      @endif
      <article class="my-3 fs-6">
        <small>
          {!! $post->body !!}
        </small>
      </article>
    </div>
  </div>
</section>

@endsection