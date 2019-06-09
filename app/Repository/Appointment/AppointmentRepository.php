<?php

namespace App\Repository\Appointment;

use App\Appoitment;
use App\Repository\CRUDInterface;



class AppointmentRepository implements CRUDInterface
{

    public function save($params) {

        $Appopitment = new Appoitment([
            'user_id' => $params['user_id'],
            'name' => $params['name'],
            'last_name' => $params['last_name'],
            'email' => $params['email'],
            'phone' => $params['phone'],
            'veh_make' => $params['veh_make'],
            'appointment' => $params['dateAndTime'],
            'description' => $params['description'],
            'comment_admin' => 'Nema komentar',
            'active' => 1,
            'confirm' => 0
        ]);
        $Appopitment->save();
    }


    public function getAll(){
        return 1;
    }

    public function getById(){
        return 1;
    }

    public function update(){
        return 1;
    }

    public function delete(){
        return 1;
    }



}