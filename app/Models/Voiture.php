<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'immatriculation',
        'num_assurance',
        'kilometrage',
        'date_debut_location',
        'date_fin_location',
        'client_id',
    ];

    function client(){
        return $this->belongsTo(Client::class);
    }
}
