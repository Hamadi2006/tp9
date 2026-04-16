@props(['objet'])

<div class="col-sm-6 col-md-4 col-xl-3">
    <div class="lot-card">
        <div class="img-wrap">
            <!-- T-ekked mn la relation 'photos' f l-Model ila bghiti t-fichi sora dial kher -->
            <img src="{{ $objet->photos->first()->url ?? 'https://placeholder.com' }}" alt="{{ $objet->titre }}" />
            <div class="fav-btn"><i class="bi bi-heart"></i></div>
        </div>
        <div class="lot-card-body">
            <div class="lot-estimation">
                <span>Estimation : </span>
                {{ number_format($objet->prix_min, 0, ',', ' ') }} € – {{ number_format($objet->prix_max, 0, ',', ' ') }} €
            </div>
            <div class="lot-num">Lot {{ $objet->lot }}</div>
            <h5 class="lot-title text-truncate-2">{{ $objet->titre }}</h5>
            
            <p class="small text-muted mb-2">
                <i class="bi bi-geo-alt"></i> {{ $objet->ville->libelle ?? 'Ville' }}
            </p>

            <div class="lot-footer">
                @if($objet->date_fermeture > now())
                    <div class="lot-status en-cours">
                        <span class="badge-live"><span class="dot"></span>Live</span> En cours
                    </div>
                @else
                    <div class="lot-status termine" style="color: red;">Terminé</div>
                @endif
                
                <a href="#" class="btn-bid text-decoration-none text-center">Enchérir</a>
            </div>
        </div>
    </div>
</div>
