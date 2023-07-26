@extends('dashboard.layouts.main')

@section('content')

<div class="pagetitle">
  <h1>{{ $title }}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/dashboard/categories">Categories</a></li>
      <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
  </nav>
</div>

<hr>

<section class="section dashboard">
  <form action="/dashboard/categories" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row g-3 mb-3">
      <div class="col-sm-6 form-floating">
        <input type="text" class="form-control fs-6 @error('name') is-invalid @enderror" id="name" name="name" placeholder="Category Name" required autofocus value="{{ old('name') }}">
        <label for="name" class="mx-2">Category Name</label>
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-sm-6 form-floating">
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Slug will automatically" readonly value="{{ old('slug') }}">
        <label for="slug" class="mx-2">Slug</label>
        @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Create Post</button>
  </form>
</section>


<script>
  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('change', function() {
    fetch('/dashboard/categories/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });
</script>
@endsection