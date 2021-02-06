<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaisonFormation extends Model
{
    use HasFactory;

    public function formulaire(){
        return $this->belongsTo('App\Formulaire');
    }
}
