<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public function poste()
    {
        return $this->belongsTo('App/Poste');
    }

    public function conges()
    {
        return $this->hasMany(Conges::class);
    }

    public  function contrat(){
        return $this->hasOne('App\Contrat');
    }
    protected $fillable=['cni','nom','prenom','date_naissance','lieu_naissance','ville','adresse','telephone','id_poste','email','sexe'];
    //
}
