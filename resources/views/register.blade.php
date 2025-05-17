@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Inscription</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error) <p>{{ $error }}</p> @endforeach
        </div>
    @endif

    <form action="{{ url('/register') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nom :</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email :</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Mot de passe :</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Confirmation du mot de passe :</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">S'inscrire</button>
    </form>
</div>
@endsection
