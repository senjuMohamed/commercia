@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier le Produit</h2>

        <form action="/products/{{ $product->id }}" method="POST">
            @csrf
            @method('PUT')  <!-- Indique que cette requête est une mise à jour -->

            <div class="form-group">
                <label for="name">Nom du Produit</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" required>{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ old('price', $product->price) }}" required>
            </div>

            <div class="form-group">
                <label for="image_url">URL de l'Image</label>
                <input type="url" id="image_url" name="image_url" class="form-control" value="{{ old('image_url', $product->image_url) }}">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Mettre à Jour</button>
        </form>
    </div>
@endsection
