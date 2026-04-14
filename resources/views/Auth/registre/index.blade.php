

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>RegistrePage</title>
</head>
<body>
    <div class="container">
    <div class="register-container">
        <div class="register-header">
            <a href="{{ route('home') }}" class="brand-logo">Bids<span>&ART</span></a>
            <h2>Créer un compte</h2>
            <p class="text-muted small">Rejoignez notre communauté d'enchérisseurs</p>
        </div>

        <form action="#" method="POST">
            <div class="mb-3">
                <label class="form-label">Nom complet</label>
                <input type="text" name="name" class="form-control" placeholder="Ex: Ahmed Alami" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Adresse Email</label>
                <input type="email" name="email" class="form-control" placeholder="exemple@mail.com" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label class="form-check-label small" for="terms">
                    J'accepte les conditions générales de vente.
                </label>
            </div>

            <button type="submit" class="btn-register">S'inscrire</button>

            <div class="login-link">
                Déjà inscrit ? <a href="login.html">Se connecter</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
