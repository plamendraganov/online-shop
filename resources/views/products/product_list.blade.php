@extends('layouts.main')

@section('content')
    <div class="container d-flex">
        @foreach ($products as $product)    
            <div class="w-33 mr-2">
                <img src="{{ $product->image }}" alt="product_image" width="200">
                <h4>{{ $product->product_name }}</h4>
                <h6>{{ $product->price }}</h6>
                <button class="btn btn-primary">Buy</button>
            </div>
        @endforeach
    </div>
@endsection