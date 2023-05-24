
@extends('layouts.main')
@section('container')
<h1>Post Categories : {{ $title }}</h1>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h1>
                <a href="/post/{{ $post->slug }}">
                    {{ $post['title'] }}
                </a>
            </h1>
            <h5>{{ $post->author }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection