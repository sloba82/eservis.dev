<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';



    public function serviceCar()
    {
        return $this->belongsTo('App\Car');
    }
}
