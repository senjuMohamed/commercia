@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Résumé de la Commande</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Produit 1</td>
                            <td>1</td>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <td>Produit 2</td>
                            <td>2</td>
                            <td>$15</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td colspan="2" class="text-right">$50</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#" class="btn btn-primary btn-block">Payer maintenant</a>
            </div>
        </div>
    </div>
@endsection
