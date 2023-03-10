<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
    use HasFactory;

    public function image(){
        return $this->hasMany(AccomadationImage::class,'accomadation_id');
    }

    public function feature(){
        return $this->hasMany(AccomadationFeature::class,'accomadation_id');
    }
}