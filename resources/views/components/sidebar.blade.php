     <!-- SIDEBAR -->
      <div class="col-lg-3 col-xl-2">
        <div class="sidebar">
          <div class="sidebar-header"><i class="bi bi-funnel me-2"></i>Filtrer</div>

          <!-- TYPE DE VENTE -->
          <div class="filter-section">
            <div class="filter-title">
              Type de vente <i class="bi bi-chevron-up" style="font-size:.75rem;"></i>
            </div>
            <div class="filter-item">
              <input type="checkbox" id="f-live" checked/>
              <label for="f-live" class="filter-item-label">
                <div class="name live"><i class="bi bi-broadcast"></i> Live</div>
                <div class="desc">La vente est en direct, vous pouvez enchérir en même temps que la salle et disposerez du retour vidéo/son.</div>
              </label>
            </div>
            <div class="filter-item">
              <input type="checkbox" id="f-chrono"/>
              <label for="f-chrono" class="filter-item-label">
                <div class="name chrono"><i class="bi bi-hourglass-split"></i> Chrono</div>
                <div class="desc">La vente se déroule sur plusieurs jours. Vous pouvez enchérir ou déposer une enchère automatique jusqu'à clôture des enchères.</div>
              </label>
            </div>
            <div class="filter-item">
              <input type="checkbox" id="f-catalogue"/>
              <label for="f-catalogue" class="filter-item-label">
                <div class="name catalogue"><i class="bi bi-book"></i> Catalogue</div>
                <div class="desc">La vente ne se déroule pas sur le site : vous pouvez découvrir son catalogue et déposer une enchère avant le jour de la vente.</div>
              </label>
            </div>
          </div>

          <!-- DÉPARTEMENTS -->
          <div class="filter-section">
            <div class="filter-title">
              Départements <i class="bi bi-chevron-down" style="font-size:.75rem;"></i>
            </div>
            <div class="filter-item"><input type="checkbox" id="d1"/><label for="d1" class="filter-item-label"><div class="name catalogue">Arts de la table / Orfèvrerie</div></label></div>
            <div class="filter-item"><input type="checkbox" id="d2" checked/><label for="d2" class="filter-item-label"><div class="name catalogue">Mobilier classique</div></label></div>
            <div class="filter-item"><input type="checkbox" id="d3"/><label for="d3" class="filter-item-label"><div class="name catalogue">Mobilier moderne & Design</div></label></div>
            <div class="filter-item"><input type="checkbox" id="d4"/><label for="d4" class="filter-item-label"><div class="name catalogue">Tapis et textures</div></label></div>
            <div class="filter-item"><input type="checkbox" id="d5"/><label for="d5" class="filter-item-label"><div class="name catalogue">Textiles et dentelles</div></label></div>
          </div>

          <!-- LIEU -->
          <div class="filter-section">
            <div class="filter-title">
              Lieu <i class="bi bi-chevron-down" style="font-size:.75rem;"></i>
            </div>
            <div class="filter-item"><input type="checkbox" id="l1"/><label for="l1" class="filter-item-label"><div class="name catalogue">Paris</div></label></div>
            <div class="filter-item"><input type="checkbox" id="l2"/><label for="l2" class="filter-item-label"><div class="name catalogue">Lyon</div></label></div>
            <div class="filter-item"><input type="checkbox" id="l3"/><label for="l3" class="filter-item-label"><div class="name catalogue">Bordeaux</div></label></div>
          </div>

          <!-- ESTIMATION -->
          <div class="filter-section">
            <div class="filter-title">
              Estimation <i class="bi bi-chevron-down" style="font-size:.75rem;"></i>
            </div>
            <div class="px-1">
              <div class="d-flex gap-2 mb-2">
                <input type="number" class="form-control form-control-sm" placeholder="Min €" style="font-size:.8rem;"/>
                <input type="number" class="form-control form-control-sm" placeholder="Max €" style="font-size:.8rem;"/>
              </div>
              <button class="btn btn-sm w-100" style="background:var(--dark-navy);color:#fff;font-size:.78rem;font-weight:700;border-radius:2px;letter-spacing:.05em;text-transform:uppercase;">Appliquer</button>
            </div>
          </div>
        </div>
      </div>