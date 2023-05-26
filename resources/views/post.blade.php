@extends('layouts.main');

@section('container')

<div class="con">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-3">
            <h1>{{ $post->title }}</h1>
            <p class="fs-5"> By <a href="#" class="text-decoration-none text-dark">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none ">{{ $post->category->name }}</a> </p>
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
            <p>{!! $post->body!!}</p>
            
            <a href="/blog">Back to post</a> 
        </div>
    </div>
</div>

   
@endsection