<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appoitment extends Model
{
    //

    protected $fillable = [

        'user_id',
        'name',
        'last_name',
        'email',
        'phone',
        'veh_make',
        'appoitment',
        'description',
        'active',
        'confirm'
    ];


}
