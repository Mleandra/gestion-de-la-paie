<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    public function employer(){
    return $this->hasMany(Employer::class);
    }
    protected $fillable = ['employer_id' ,'jour'];


}
