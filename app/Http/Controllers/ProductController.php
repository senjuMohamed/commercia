<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    public function index()
    {
        // Récupérer tous les produits
        $products = Product::all();

        // Passer les produits à la vue
        return view('products', compact('products'));
    }
    // Afficher le formulaire de création de produit
    public function create()
    {
        return view('products.create');
    }

    // Enregistrer le produit dans la base de données
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image_url' => 'nullable|url',
        ]);

        // Créer un produit avec les données du formulaire
        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image_url' => $request->input('image_url'),
        ]);

        // Rediriger vers la page des produits avec un message de succès
        return redirect('/products')->with('success', 'Produit ajouté avec succès!');
    }
         public function edit($id)
        {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
        }
        public function update(Request $request, $id)
{
    // Valider les données du formulaire
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image_url' => 'nullable|url',
    ]);

    // Trouver le produit existant
    $product = Product::findOrFail($id);

    // Mettre à jour les informations du produit
    $product->update([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'price' => $request->input('price'),
        'image_url' => $request->input('image_url'),
    ]);

    // Rediriger vers la page des produits avec un message de succès
    return redirect('/products')->with('success', 'Produit mis à jour avec succès!');
}
public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect('/products')->with('success', 'Produit supprimé avec succès!');
}


}
