@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>   
    <h2><?=$name?></h2>
    <h2> {{ $email }} </h2>
    <img src="img/{{ $img }}" alt="<?=$name?>" class="rounded-circle" width="200">

@endsection
