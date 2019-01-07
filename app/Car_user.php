<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_user extends Model
{
    protected $table = 'car_users';

    protected $fillable = [
        'car_id',
        'user_id'
    ];


    public function cars (){

        return $this->belongsToMany('App\Car');
    }
}
