<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - BidsArt</title>
    <link href="https://jsdelivr.net" rel="stylesheet">
    <link href="https://googleapis.com" rel="stylesheet">
    <link href="https://jsdelivr.net" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="container">
    <div class="login-container">
        <div class="login-header">
            <a href="{{ route('home') }}" class="brand-logo">Bids<span>Art</span></a>
            <h2>Connexion</h2>
        </div>

        <form action="#" method="POST">
            <div class="mb-3">
                <label class="form-label">Adresse Email</label>
                <input type="email" name="email" class="form-control" placeholder="votre@email.com" required>
            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <label class="form-label">Mot de passe</label>
                    <a href="#" class="forgot-password text-decoration-none">Oublié ?</a>
                </div>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="remember">
                <label class="form-check-label small" for="remember">
                    Se souvenir de moi
                </label>
            </div>

            <button type="submit" class="btn-login-submit">Se connecter</button>

            <div class="extra-links">
                <a href="#">Pas encore de compte ? <span>S'inscrire</span></a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
