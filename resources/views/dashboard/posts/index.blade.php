@extends('dashboard.layouts.main')

@section('content')

<div class="pagetitle">
  <h1>{{ $title }}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
  <a href="/dashboard/posts/create" class="btn btn-sm btn-primary mb-3">Create New Post</a>
  
  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-1"></i>
        {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @elseif (session()->has('delete'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle me-1"></i>
      {{ session('delete') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @elseif (session()->has('update'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle me-1"></i>
      {{ session('update') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <table class="table col-lg-8">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($posts as $post)
        <tr>
          <th>{{ $loop->iteration }}</th>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-primary btn-sm"><i data-feather="eye" style="width: 1rem"></i></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm text-white"><i data-feather="edit" style="width: 1rem"></i></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i data-feather="x-circle" style="width: 1rem"></i></button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="text-center"><small  >This user hasn't posted anything yet.</small></td>
        </tr>
      @endforelse
    </tbody>
  </table>
</section>

@endsection