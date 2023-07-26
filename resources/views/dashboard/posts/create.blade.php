@extends('dashboard.layouts.main')

@section('content')

<div class="pagetitle">
  <h1>{{ $title }}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/dashboard/posts">My Posts</a></li>
      <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
  </nav>
</div>

<hr>

<section class="section dashboard">
  <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row g-3 mb-3">
      <div class="col-sm-6 form-floating">
        <input type="text" class="form-control fs-6 @error('title') is-invalid @enderror" id="title" name="title" placeholder="Your Title" required autofocus value="{{ old('title') }}">
        <label for="title" class="mx-2">Your Title</label>
        @error('title')
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
      <div class="col-sm-12 form-floating">
        <div class="form-floating">
          <select class="form-select" id="category" name="category_id" aria-label="category_id">
            <option selected>Default Category</option>
            @forelse ($categories as $category)
              @if (old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endif
            @empty
              <option>Category Not Found.</option>
            @endforelse
          </select>
          <label for="category">Category</label>
        </div>
      </div>
      <div class="col-sm-12">
        <label for="image"><small class="text-uppercase text-secondary">Preview Image</small></label>
        <img class="img-preview img-fluid mb-3 col-sm-5" alt="">
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" onchange="previewImage()">
        @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="col-sm-12">
        <label for="body">Body</label>
        @error('body')
          <p><small class="text-danger">{{ $message }}</small></p>
        @enderror
        <input type="hidden" id="body" name="body" value="{{ old('body') }}">
        <trix-editor input="body" id="body"></trix-editor>
      </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Create Post</button>
  </form>
</section>


<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function() {
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault()
  });

  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    
    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection