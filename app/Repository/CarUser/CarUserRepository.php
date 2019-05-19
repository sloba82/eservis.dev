<?php

namespace App\Repository\CarUser;

use Illuminate\Support\Facades\DB;

class CarUserRepository {

    private $data;


    /**
     * @param $entity can be user or car
     * @param $id is id of car or user
     */
    public function __construct($entity, $id)
    {
        if($entity == 'car'){
            $this->data = $this->userCarData($id);
        }
        elseif ($entity == 'user') {
            $this->data = $this->allUserCars($id);
        }
        else {
            $this->data = '';
        }

    }

    public function __get($field)
    {
        return  array_key_exists($field, $this->data ) ? $this->data[$field] : null ;
    }

    public function userCarData($id){
        $userCarData = DB::table('users')
            ->leftJoin('car_users', 'car_users.user_id', '=', 'users.id')
            ->leftJoin('cars', 'cars.id', '=', 'car_users.car_id')
            ->where('car_users.car_id', $id)
            ->select('users.name','users.last_name','users.address','users.city','users.phone', 'cars.*')
            ->limit(1)
            ->get();

        return  $userCarData;
    }

    public function allUserCars($id){
        $allUserCars = DB::table('users')
            ->leftJoin('car_users', 'car_users.user_id', '=', 'users.id')
            ->leftJoin('cars', 'cars.id', '=', 'car_users.car_id')
            ->where('users.id', $id)
            ->select('cars.*')
            ->get();

        return  $allUserCars;
    }

}



