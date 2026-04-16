<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Objet;

class TypeVente extends Model
{
    protected $fillable = ['libelle','icon'];

    public function objets()
    {
        return $this->hasMany(Objet::class);
    }
}
