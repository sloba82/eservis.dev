<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    protected $fillable = [
        'numberplate'
    ];


    public function cars (){


        return $this->hasMany('App\Car');


    }

}
