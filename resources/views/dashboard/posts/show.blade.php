@extends('dashboard.layouts.main')

@section('container')
  <div class="container col-lg-8 px-5 py-5">
          
          <h2>{{ $post->title}}</h2>
          
          <a href="/dashboard/posts" class="btn btn-success text-right">
            <span data-feather ="arrow-left"></span> Back to All my post
          </a>
          <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning">
            <span data-feather ="edit"></span> Edit my post
          </a>

          <form action="/dashboard/posts/{{$post->slug}}" method="post" class="d-inline">
            @method('delete')
            @csrf
              <button class="btn btn-danger" onclick="return confirm('Are you sure ? ') ">
                  <span data-feather="delete"></span> Delete my post  
              </button>
          </form>

          @if($post->image)
            <img src="{{asset('storage/' . $post->image)}}" class="card-img-top img-fluid mt-3" alt="{{$post->category->name}}">
          @else()
            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="card-img-top img-fluid mt-3" alt="" >
          @endif

          <article class="my-4 fs-5">
          {!!$post->body!!}
          </article>

  </div>
@endsection
