<nav class="navbar-main">
  <div class="container-xl d-flex justify-content-between align-items-center gap-3">
    <a href="/" class="brand">Bids<span>Art</span></a>
    
    <div class="search-bar d-flex flex-grow-1 mx-4">
      <input type="text" placeholder="Rechercher un lot, une maison de ventes…" />
      <button><i class="bi bi-search"></i></button>
    </div>

    <div class="d-flex align-items-center gap-3">
      @auth
        <a href="#" style="color:#333;font-size:0.85rem;text-decoration:none;display:flex;align-items:center;gap:6px;">
          <i class="bi bi-heart" style="font-size:1.1rem;"></i> 
          <span class="d-none d-lg-inline">Favoris</span>
        </a>
        
        <div class="dropdown">
          <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" style="color:#333;font-size:0.85rem;text-decoration:none;display:flex;align-items:center;gap:6px;">
            <i class="bi bi-person-check-fill" style="font-size:1.1rem; color: var(--primary);"></i> 
            <span class="d-none d-lg-inline">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Mon Profil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form method="POST" action="#">
                @csrf
                <button type="submit" class="dropdown-item text-danger">Déconnexion</button>
              </form>
            </li>
          </ul>
        </div>
      @endauth

      @guest
        <a href="{{ route('login.show') }}" style="color:#333;font-size:0.85rem;text-decoration:none;">Connexion</a>
        <a href="{{ route('register.show') }}" class="btn-login" style="text-decoration:none; background: var(--primary); color: #fff; padding: 6px 15px; border-radius: 2px;">S'inscrire</a>
      @endguest
    </div>
  </div>
</nav>

<div class="nav-categories">
  <div class="container-xl">
    <ul class="nav mb-0">
      <li class="nav-item"><a class="nav-link active" href="#">Toutes les ventes</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Art moderne</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Mobilier & Objets d'art</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Bijoux & Montres</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Livres & Manuscrits</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Vins & Spiritueux</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Numismatique</a></li>
    </ul>
  </div>
</div>
