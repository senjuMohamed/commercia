@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter un Nouveau Produit</h2>

        <form action="/products" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nom du Produit</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" id="price" name="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image_url">URL de l'Image</label>
                <input type="url" id="image_url" name="image_url" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Ajouter le Produit</button>
        </form>
    </div>
@endsection
