@extends('layouts.main');

@section('container')

<article>
    <h1>{{ $post->title }}</h1>
    <p class="fs-5"> By <a href="#" class="text-decoration-none text-dark">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none ">{{ $post->category->name }}</a> </p>
    <h5>{{ $post->author }}</h5>
    <p>{!! $post->body!!}</p>
</article>

<a href="/blog">Back to post</a>
    
@endsection