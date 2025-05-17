@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Nos Produits</h2>
        <div class="row">
            <!-- Vérifie que la variable $products existe et est une collection -->
            @forelse ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>Prix : </strong>{{ $product->price }} €</p>

                            <a href="/products/{{ $product->id }}/edit" class="btn btn-warning">Modifier</a>

                            <form action="/products/{{ $product->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <p>Aucun produit trouvé.</p>
            @endforelse
        </div>

        <a href="/products/create" class="btn btn-primary mt-4">Ajouter un Nouveau Produit</a>
    </div>
@endsection