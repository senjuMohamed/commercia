<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commercia</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="path_to_your_logo.png" alt="Commercia Logo" style="width: 50px; height: 50px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link" href="/"><i class="fas fa-home"></i> Accueil</a></li>
    <li class="nav-item"><a class="nav-link" href="/products"><i class="fas fa-box"></i> Produits</a></li>
    <li class="nav-item"><a class="nav-link" href="/contact"><i class="fas fa-envelope"></i> Contact</a></li>
    <li class="nav-item"><a class="nav-link" href="/checkout"><i class="fas fa-shopping-cart"></i> Panier</a></li>
    <li class="nav-item"><a class="nav-link" href="/about"><i class="fas fa-info-circle"></i> À propos</a></li>

        @auth
        <li class="nav-item">
            <span class="navbar-text text-white mr-2">
                <i class="fas fa-user"></i> {{ Auth::user()->name }}
            </span>
        </li>
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-link nav-link" type="submit">
                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                </button>
            </form>
        </li>
            @else
        <li class="nav-item"><a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a></li>
        <li class="nav-item"><a class="nav-link" href="/register"><i class="fas fa-user-plus"></i> Register</a></li>
            @endauth
        </ul>


    </div>
    </nav>

    @yield('content')
    <div class="container mt-3">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
        </div>


    <footer>
        <p>&copy; 2025 Commercia. Tous droits réservés.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
