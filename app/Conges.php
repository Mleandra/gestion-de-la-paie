<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conges extends Model
{
    public function employer() {
        return $this->belongsTo(Employer::class);
    }
}
