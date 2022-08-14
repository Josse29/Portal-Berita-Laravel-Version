
@extends('layouts.main')

@section('container')
	<h1 class="mb-3 text-center">{{$title}}</h1>
	<div class="row justify-content-center mb-3">
		<div class="col-md-8">
			<form action="/posts">
				@if(request('category'))
					<input type="hidden" name="category" value="{{request('category')}}">
				@endif
				@if(request('author'))
					<input type="hidden" name="category" value="{{request('author')}}">
				@endif
				<div class="input-group">	
				<input type="text" class="form-control" placeholder="Masukkan inputan..." name="search" value="{{request('search')}}" required>
				<button class="btn btn-success" type="submit">Cari</button>
				</div>
			</form>
		</div>
	</div>

	@if($posts->count())
	<div class="card mb-3">
		@if($posts[0]->image)
            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top img-fluid mt-3" alt="{{$posts[0]->category->name}}">
        @else
            <img src="https://source.unsplash.com/1200x400?{{$posts[0]->category->name}}" class="card-img-top img-fluid mt-3" alt="{{$posts[0]->category->name}}" >
        @endif

		<div class="card-body text-center">
			<h5 class="card-title"><a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none text-dark">{{$posts[0]->title}}</a></h5>
			<p>by <a href="/posts?author={{$posts[0]->author->username}}" class="text-decoration-none text-secondary">{{$posts[0]->author-> name}}</a> in <a href="/posts?category={{$posts[0]->category->slug}}" class="text-decoration-none text-primary">{{$posts[0]->category->name}}</a></p>
			<p class="card-text">{{$posts[0]->excerpt}}</p>
			<p class="card-text"></p>
			<p class="card-text"><small class="text-muted">{{$posts[0]->created_at->diffForHumans()}}</small></p>
			<a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none btn btn-primary">Read more</a>
		</div>		
	</div>
	
	<div class="container">
		<div class="row">
			@foreach($posts->skip(1) as $post)
				<div class="col-md-4 mb-3">
					<div class="card">
						<div class="position-absolute text-dark bg-dark  text-white px-3 py-2">
							<a href="/posts?category={{$post->category->slug}}" class="text-decoration-none text-white">{{$post->category->name}}</a>
						</div>

						<img src="https://source.unsplash.com/500x400?{{$post->category->name}}" alt="{{$post->category->name}}" class="card-img-top">

						<div class="card-body">
							<h5 class="card-title">{{$post->title}}</h5>
							<p>
								<small class="text-muted">
									By. <a href="/posts?author={{$post->author->name}}" class="text-decoration-none">{{$post->author->name}}</a>
									{{$post->created_at->diffForHumans()}}
								</small>
							</p>
							<p class="card-text">{{$post->excerpt}}</p>
							<a href="/posts/{{$post->slug}}" class="btn btn-primary">Read More</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>

	@else
	<p class="text-center fs-4">No Post found</p>
	@endif
	<div class="d-flex justify-content-center">
		{{$posts->links()}}
	</div>

@endsection

