<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }
}
