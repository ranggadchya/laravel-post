@extends('layouts.main')

@section('content')

  <h1>Halaman {{ $title }}</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $email }}</p>
  <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">

@endsection