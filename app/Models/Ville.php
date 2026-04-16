<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Objet;
class Ville extends Model
{
    protected $fillable = ['libelle'];

    public function objets()
    {
        return $this->hasMany(Objet::class);
    }
}
