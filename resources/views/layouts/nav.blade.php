<!-- 1. Darouri tzid had l-ficher bach t-aktiwi jQuery -->
<script src="https://jquery.com"></script>

<nav class="navbar-main">
  <div class="container-xl d-flex justify-content-between align-items-center gap-3">
    <a href="/" class="brand">Bids<span>Art</span></a>
    
    <!-- BARRE DE RECHERCHE -->
    <div class="search-bar d-flex flex-grow-1 mx-4 position-relative">
      <input type="text" id="search-input" placeholder="Rechercher un lot, une référence..." autocomplete="off" />
      <button type="button"><i class="bi bi-search"></i></button>
      
      <!-- Container resultats -->
      <div id="search-results" class="list-group position-absolute w-100 shadow-lg" 
           style="top: 100%; left:0; z-index: 9999; display: none; background: white; border-radius: 0 0 4px 4px; border: 1px solid #ddd;">
      </div>
    </div>

    <div class="d-flex align-items-center gap-3">
      @auth
        <div class="dropdown">
          <button class="btn dropdown-toggle d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border:none; background:none; font-size:0.85rem;">
            <i class="bi bi-person-check-fill" style="font-size:1.1rem; color: var(--primary);"></i> 
            <span class="d-none d-lg-inline">{{ Auth::user()->nom ?? Auth::user()->name }}</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end shadow-sm">
            <li><a class="dropdown-item" href="{{ route('home') }}">Mon Profil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
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

<!-- NAV CATEGORIES -->
<div class="nav-categories">
  <div class="container-xl">
    <ul class="nav mb-0">
      <li class="nav-item">
        <a class="nav-link {{ !request('category') ? 'active' : '' }}" href="{{ route('home') }}">
            Toutes les ventes
        </a>
      </li>
      @foreach($categories as $cat)
      <li class="nav-item">
        <a class="nav-link {{ request('category') == $cat->id ? 'active' : '' }}" 
           href="{{ route('home', ['category' => $cat->id]) }}">
            {{ $cat->libelle }}
        </a>
      </li>
      @endforeach
    </ul>
  </div>
</div>

<script>
$(document).ready(function() {
    // 2. Logique dyal Search
    $('#search-input').on('input', function() {
        let term = $(this).val();
        let $results = $('#search-results');

        if (term.length >= 2) {
            $.ajax({
                url: "{{ route('search.ajax') }}",
                type: "GET",
                data: { term: term },
                success: function(data) {
                    $results.empty().show();
                    if (data.length > 0) {
                        $.each(data, function(index, item) {
                            $results.append(`
                                <a href="/objets/${item.lot}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    <div>
                                        <small class="text-primary fw-bold">${item.lot}</small><br>
                                        <span style="font-size:0.85rem;">${item.titre}</span>
                                    </div>
                                    <span class="badge bg-light text-dark">${item.prix_min} €</span>
                                </a>
                            `);
                        });
                    } else {
                        $results.append('<div class="list-group-item small text-muted">Aucun résultat trouvé</div>');
                    }
                },
                error: function() {
                    console.log("Erreur: T-ekked mn la route search.ajax f web.php");
                }
            });
        } else {
            $results.hide();
        }
    });

    // Tsed results mlli t-cliki berra
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.search-bar').length) {
            $('#search-results').hide();
        }
    });
});
</script>
