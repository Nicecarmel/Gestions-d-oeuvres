<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable=[
        'titre','description','slug'
    ];
    public function oeuvres(){
        return $this->hasMany(Oeuvre::class,'categorie_id');
    }
}
