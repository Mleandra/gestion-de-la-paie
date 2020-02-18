<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    public function employer(){
        return $this->belongsTo('App\Employer') ;
    }
    protected $fillable=['employer_id','type_id','date_debut','date_fin','status'];

    public function type_contrat(){
        return $this->belongsTo(TypesContrat::class);
    }
}
