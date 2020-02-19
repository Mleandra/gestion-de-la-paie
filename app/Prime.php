<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prime extends Model
{
    public function employes()
    {
        return $this->hasMany('App/Employer');
    }
    protected $fillable=['employer_id','montant','motif','date'];
}
