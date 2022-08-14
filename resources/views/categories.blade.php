
@extends('layouts.main')

@section('container')
	<h1 class="mb-5">Post Categories</h1>
	<div class="container">
		<div class="row">
		@foreach($categories as $category)
			<div class="col-md-4">
				<div class="card bg-dark text-white">
				<img src="https://source.unsplash.com/500x400?{{$category->name}}" class="card-img" alt="{{$category->name}}">
				<a href="/posts?category={{$category->slug}}" class="text-decoration-none text-white">
				<div class="card-img-overlay d-flex align-items-center p-0">
					<h5 class="card-title text-center flex-fill p-3" style="background-color:rgba(0, 0, 0, .6);">{{$category->name}}</h5>
					<p class="card-text"></p>
					<p class="card-text"></p>
				</div>
				</a>	
				</div>
			</div>
		@endforeach
		</div>
	</div>
@endsection