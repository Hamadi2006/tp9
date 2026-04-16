@props(['categories', 'villes'])

<style>
    .filter-content { display: none; }
    .filter-content.show { display: block; }
    .cursor-pointer { cursor: pointer; }
</style>

<div class="col-lg-3 col-xl-2">
    <div class="sidebar">
        <div class="sidebar-header d-flex justify-content-between align-items-center">
            <span><i class="bi bi-funnel me-2"></i>Filtrer</span>
        </div>

        <form action="{{ route('home') }}" method="GET">
            <!-- Catégories -->
            <div class="filter-section">
                <div class="filter-title d-flex justify-content-between align-items-center cursor-pointer toggle-trigger">
                    Catégories <i class="bi bi-chevron-up toggle-icon"></i>
                </div>
                <div class="filter-content show"> <!-- "show" bach tban par défaut -->
                    @foreach($categories as $cat)
                    <div class="filter-item">
                        <input type="checkbox" name="categories[]" value="{{ $cat->id }}" id="cat{{ $cat->id }}" 
                            {{ is_array(request('categories')) && in_array($cat->id, request('categories')) ? 'checked' : '' }}
                            onchange="this.form.submit()"/>
                        <label for="cat{{ $cat->id }}" class="filter-item-label">
                            <div class="name catalogue">{{ $cat->libelle }}</div>
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Villes -->
            <div class="filter-section">
                <div class="filter-title d-flex justify-content-between align-items-center cursor-pointer toggle-trigger">
                    Villes <i class="bi bi-chevron-down toggle-icon"></i>
                </div>
                <div class="filter-content">
                    @foreach($villes as $ville)
                    <div class="filter-item">
                        <input type="checkbox" name="villes[]" value="{{ $ville->id }}" id="v{{ $ville->id }}"
                            {{ is_array(request('villes')) && in_array($ville->id, request('villes')) ? 'checked' : '' }}
                            onchange="this.form.submit()"/>
                        <label for="v{{ $ville->id }}" class="filter-item-label">
                            <div class="name catalogue">{{ $ville->libelle }}</div>
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Estimation -->
            <div class="filter-section border-bottom-0">
                <div class="filter-title d-flex justify-content-between align-items-center cursor-pointer toggle-trigger">
                    Estimation <i class="bi bi-chevron-down toggle-icon"></i>
                </div>
                <div class="filter-content">
                    <div class="px-1">
                        <div class="d-flex gap-2 mb-2">
                            <input type="number" name="min_price" value="{{ request('min_price') }}" class="form-control form-control-sm" placeholder="Min €"/>
                            <input type="number" name="max_price" value="{{ request('max_price') }}" class="form-control form-control-sm" placeholder="Max €"/>
                        </div>
                        <button type="submit" class="btn btn-sm w-100" style="background:var(--dark-navy);color:#fff;font-weight:700;border-radius:2px;text-transform:uppercase;">Appliquer</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.querySelectorAll('.toggle-trigger').forEach(trigger => {
        trigger.addEventListener('click', function() {
            // Toggli l-content li hda l-clic
            const content = this.nextElementSibling;
            content.classList.toggle('show');

            // Toggli l-icon
            const icon = this.querySelector('.toggle-icon');
            if (content.classList.contains('show')) {
                icon.classList.replace('bi-chevron-down', 'bi-chevron-up');
            } else {
                icon.classList.replace('bi-chevron-up', 'bi-chevron-down');
            }
        });
    });
</script>
