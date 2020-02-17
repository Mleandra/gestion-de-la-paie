<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypesContrat extends Model
{
    public function contrats(){
        return $this->hasMany(Contrat::class);
    }
}
