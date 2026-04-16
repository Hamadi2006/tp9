<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Objet;
class Photo extends Model
{
    //(id,objet_lot,url)
    protected $fillable = ['objet_lot', 'url'];

    public function objet()
    {
        return $this->belongsTo(Objet::class);
    }
}
