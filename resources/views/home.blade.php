@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-sm-3">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><b>${{$product->price}}</b> ({{$product->discount}}%)</h6>
                            <p class="card-text">{{$product->description}}</p>
                            <a href="{{ route('products.show',$product->id) }}" class="card-link">View Product</a>
                        </div>
                        </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {!! $products->links() !!}    
            </div>
        </div>
    </div>
</div>
@endsection
