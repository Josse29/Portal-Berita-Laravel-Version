@extends('layouts.main')
@section('container')
	<h1>Halaman {{$title}}</h1>
	<h5>{{ $nama }}</h5>
	<h4>{{ $email }}</h4>
	<img src="img/{{ $image }} ?>" alt="" class="img-thumbnail rounded-2">
@endsection