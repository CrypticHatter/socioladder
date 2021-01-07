@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    <p>You are logged as an amin</p>
                    <a href="{{ URL::to('products') }}" class="btn btn-primary">Show All Products</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection