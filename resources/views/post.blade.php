@extends('layouts.main')

@section('container')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 py-3">
		<article>
			<h2>{{ $post->title}}</h2>

			<p>by. <a href="/posts?author={{$post->author->username}}">{{$post->author->name}}</a>
			<a href="/posts?category={{$post->category->slug}}">{{$post->category->name}}</a></p>
			@if($post->image)
				<img src="{{asset('storage/'.$post->image)}}" class="card-img-top" alt="" class="img-fluid">
			@else
				<img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top" alt="" class="img-fluid">
			@endif
			<article class="my-4 fs-5 text-justify">
			{!!$post->body!!}
			</article>
		</article>
		<a href="/posts">back to home</a>
		</div>
	</div>
</div>
	
@endsection