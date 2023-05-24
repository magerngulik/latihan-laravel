
@extends('layouts.main')
@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <h1>
                <a href="/post/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post['title'] }}
                </a>
                <p class="fs-5 fw-none"> By <a href="#" class="text-decoration-none text-dark">  {{ $post->user->name }} </a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </p>
            </h1>
            <h5>{{ $post->author }}</h5>
            <p>{{ $post->excerpt }}</p>
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>
    @endforeach
@endsection