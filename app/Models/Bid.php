<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Objet;
class Bid extends Model
{
    //id, user_id , objet_lot , amount,valider
    protected $fillable = ['user_id', 'objet_lot', 'amount', 'valider'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function objet()
    {
        return $this->belongsTo(Objet::class);
    }
}
