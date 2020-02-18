<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conges extends Model
{
    public function employer() {
        return $this->belongsTo(Employer::class);
    }

   protected $fillable=['employer_id','date_debut','date_fin','type_conges_id'];
}
