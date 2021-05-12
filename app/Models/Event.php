<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    function workshops(){
        return $this->hasMany(Workshop::class);
    }
}
