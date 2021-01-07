@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ $product->name }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <strong>Description:</strong>
                        {{ $product->description }}
                    </div>
                    <div class="form-group">
                        <strong>Price:</strong>
                        {{ $product->price }}
                    </div>
                    <div class="form-group">
                        <strong>Discount:</strong>
                        {{ $product->discount }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection