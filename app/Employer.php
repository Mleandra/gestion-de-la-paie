<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public function poste()
    {
        return $this->belongsTo(Postes::class);
    }

    public function conges()
    {
        return $this->hasMany(Conges::class);
    }
    public function absences()
    {
        return $this->hasMany(Absence::class);
    }

    public function est_en_conge() {
        $result = $this->conges()->whereDay('date_fin', '>=', date('Y-m-d'));
        if($result->isEmpty()) {
            return false;
        }
        return true;
    }


    public function  est_absent(){
        return ($this->absences()->whereDate('jour', '=', date('Y-m-d'))->count() > 0) ? 1 : 0;
    }
    public  function contrat(){
        return $this->hasOne(Contrat::class);
    }
    protected $fillable=['cni','nom','prenom','date_naissance','lieu_naissance','ville','adresse','telephone','poste_id','email','sexe'];
    //
}
