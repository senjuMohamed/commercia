@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Contactez-nous</h2>

        @if (session('message'))
            <div class="alert alert-success text-center">
                {{ session('message') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/contact" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Votre message..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-3">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
