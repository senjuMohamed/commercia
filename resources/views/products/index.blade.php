@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Produits</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>Prix : </strong>{{ $product->price }} €</p>

                            <a href="/products/{{ $product->id }}/edit" class="btn btn-warning">Modifier</a>

                            <!-- Formulaire de suppression -->
                            <form action="/products/{{ $product->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a href="/products/create" class="btn btn-primary">Ajouter un Nouveau Produit</a>
    </div>
@endsection
