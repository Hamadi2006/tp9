<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Objet;
class Rating extends Model
{
    //id, rating, comment, user_id , objet_lot)
    protected $fillable = ['rating', 'comment', 'user_id', 'objet_lot'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function objet()
    {
        return $this->belongsTo(Objet::class, 'objet_lot', 'lot');
    }

}
