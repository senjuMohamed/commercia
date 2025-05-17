{{-- resources/views/menu.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Menu</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text">View and manage products.</p>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">Go to Products</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact</h5>
                        <p class="card-text">Contact us for inquiries.</p>
                        <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Checkout</h5>
                        <p class="card-text">Proceed to checkout.</p>
                        <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
