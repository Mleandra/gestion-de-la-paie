<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postes extends Model
{
    public function employes()
    {
        return $this->hasMany('App/Employer');
    }
}
