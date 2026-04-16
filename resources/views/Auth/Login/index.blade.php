<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - BidsArt</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container">
    <div class="login-container">
        <div class="login-header">
            <a href="{{ route('home') }}" class="brand-logo">Bids<span>Art</span></a>
            <h2>Connexion</h2>
        </div>

        <!-- Pop-up Success (mn baad l-inscription) -->
        @if(session('success'))
            <div class="alert alert-success" style="padding: 10px; background: #d4edda; color: #155724; border-radius: 4px; margin-bottom: 15px; font-size: 0.85rem;">
                {{ session('success') }}
            </div>
        @endif

        <!-- Error Alert (ila kan email aw password ghalat) -->
        @if($errors->any())
            <div class="alert alert-danger" style="padding: 10px; background: #f8d7da; color: #721c24; border-radius: 4px; margin-bottom: 15px; font-size: 0.85rem;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.perform') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Adresse Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="votre@email.com" required>
            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <label class="form-label">Mot de passe</label>
                    <a href="#" class="forgot-password text-decoration-none">Oublié ?</a>
                </div>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
            </div>

            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label small" for="remember">
                    Se souvenir de moi
                </label>
            </div>

            <button type="submit" class="btn-login-submit">Se connecter</button>

            <div class="extra-links">
                <p>Pas encore de compte ? <a href="{{ route('register.show') }}"><span>S'inscrire</span></a></p>
            </div>
        </form>
    </div>
</div>

</body>
</html>
