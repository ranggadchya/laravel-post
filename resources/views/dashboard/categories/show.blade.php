@extends('dashboard.layouts.main')

@section('content')

<div class="pagetitle">
  <h1>{{ $title }}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item"><a href="/dashboard/categories">Categories</a></li>
      <li class="breadcrumb-item active">{{ $category->name }}</li>
    </ol>
  </nav>
</div>

<hr>

<section class="section-dashboard">
  <div class="row">
    <div class="col-md-8">
      <a href="/dashboard/categories" class="btn btn-success btn-sm align-items-center"><i data-feather="arrow-left" style="width: 1rem"></i> Back to all my categories</a>
      <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning btn-sm align-items-center"><i data-feather="edit" style="width: 1rem"></i> Edit</a>
      <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" class="d-flex align-items-center"><i data-feather="trash" style="width: 1rem"></i> Delete</button>
      </form>
      <h5 class="text-uppercase fw-semibold mt-3">{{ $category->name }}</h5>
    </div>
  </div>
</section>

@endsection