
@extends('layouts.main')

@section('container')
    <h1>product page</h1>
    <div class="container mt-4">
    <div class="row mt-3">
         @foreach ($product as $p)
            <div class="col-md-4">
                <div class="card mt-4">
                    <img src="{{ $p['photo'] }}" alt="{{ $p['product_name'] }}" height="200px">
                    <div class="card-body">
                        <h4>  {{ $p['product_name'] }}</h4>
                        <h5>{{ $p['price'] }}</h5>
                        <p>{{ $p['category'] }}</p>>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>                
            </div>    
            @endforeach
       </div>
    </div>



@endsection