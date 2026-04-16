<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enchères - Antiquités & Art</title>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
  </style>
</head>

<body>

@include('layouts.nav')

<div class="main-wrapper">
  <div class="container-xl">
    <div class="row g-4">

      <x-sidebar />

      <div class="col-lg-9 col-xl-10">
        <div class="grid-header">
          <div class="grid-count"><strong>247 lots</strong> correspondent à votre recherche</div>
          <div class="d-flex align-items-center gap-2">
            <span style="font-size:.8rem;color:#666;">Trier par :</span>
            <button class="sort-btn">
              <i class="bi bi-calendar3"></i> Date croissante <i class="bi bi-chevron-down" style="font-size:.7rem;"></i>
            </button>
          </div>
        </div>

<div class="row g-3 mb-3">
    @forelse($objets as $objet)
        <x-card :objet="$objet" />
    @empty
        <div class="col-12 text-center py-5">
            <div class="empty-state">
                <i class="bi bi-box-seam" style="font-size: 3rem; color: #ccc;"></i>
                <h3 class="mt-3 text-muted">Aucun objet trouvé</h3>
                <p>Il n'y a pas d'enchères disponibles pour le moment.</p>
                <a href="{{ route('home') }}" class="btn btn-outline-primary btn-sm">Actualiser la page</a>
            </div>
        </div>
    @endforelse
</div>


      </div>

    </div>
  </div>
</div>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
