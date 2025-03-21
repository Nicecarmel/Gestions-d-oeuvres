<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    protected $fillable=[
        'titre','artiste','annee de fabrication','date acquisition','prix estime','categorie_id','description','slug','photo'
    ];
}
