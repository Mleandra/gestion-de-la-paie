<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypesConges extends Model
{
    public function conges(){
        return $this->hasMany(Conges::class);
    }
}
