@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Nos Produits</h2>
        <div class="row">
            <!-- Exemple de carte produit -->
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>${{ $product->price }}</strong></p>
                            <a href="#" class="btn btn-primary">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
