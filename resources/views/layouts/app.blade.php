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

<x-sidebar :categories="$categories" :villes="$villes" />

<div class="col-lg-9 col-xl-10">
  <div class="grid-header d-flex justify-content-between align-items-center">
    <div class="grid-count"><strong>{{ $objets->count() }} lots</strong> correspondent à votre recherche</div>
    
    <div class="d-flex align-items-center gap-2">
      <span style="font-size:.8rem;color:#666;">Trier par :</span>
      <div class="dropdown">
        <button class="sort-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-filter"></i> 
          @switch(request('sort'))
            @case('date_asc') Date croissante @break
            @case('date_desc') Date décroissante @break
            @case('prix_asc') Prix croissant @break
            @case('prix_desc') Prix décroissant @break
            @default Date croissante
          @endswitch
          <i class="bi bi-chevron-down ms-1" style="font-size:.7rem;"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow-sm">
          <li><a class="dropdown-item small" href="{{ request()->fullUrlWithQuery(['sort' => 'date_asc']) }}">Date croissante</a></li>
          <li><a class="dropdown-item small" href="{{ request()->fullUrlWithQuery(['sort' => 'date_desc']) }}">Date décroissante</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item small" href="{{ request()->fullUrlWithQuery(['sort' => 'prix_asc']) }}">Prix croissant</a></li>
          <li><a class="dropdown-item small" href="{{ request()->fullUrlWithQuery(['sort' => 'prix_desc']) }}">Prix décroissant</a></li>
        </ul>
      </div>
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
<script src="https://jquery.com"></script>

</body>
</html>
