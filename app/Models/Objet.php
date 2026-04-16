<?php

namespace App\Models;
use App\Models\User;
use App\Models\Departement;
use App\Models\Ville;
use App\Models\TypeVente;
use App\Models\Photo;
use App\Models\Rating;
use App\Models\Bid;
use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{
    protected $fillable = ['lot', 'titre', 'description', 'prix_min', 'prix_max', 'date_fermeture', 'date_enchere', 'valider', 'user_id', 'departement_id', 'ville_id', 'type_vente_id'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
    public function typeVente()
    {
        return $this->belongsTo(TypeVente::class);
    }
    public function photos()
    {
        return $this->hasMany(Photo::class, 'objet_lot', 'lot');
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    public function bids()
    {
        return $this->hasMany(Bid::class, 'objet_lot', 'lot');
    }
}