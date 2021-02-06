<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    public function formulaire(){
        return $this->hasMany(Formulaire::class);
    }

    public function statut(){
        return $this->belongsTo(StatutFormation::class,'statutFormation_id');
    }
}
