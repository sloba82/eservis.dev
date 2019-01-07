<?php

namespace App\Repository\Services;


use App\Car;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;




class ServicesRepository
{

    public function serviceAdd($request)
    {

        $id = DB::table('services')->insertGetId(
            [
                'car_id'         => $request['carID'],
                'service_man'    => $request['service_man'],
                'service_status' => 'new',
                'kilometer'      => $request['kilometer'],
                'service_date'   => $request['service_date'],
                'description'    => $request['description'],
                "created_at" =>  Carbon::now(),
                "updated_at" =>  Carbon::now(),
            ]
        );

        return $id;
    }


    public function serviceEdit ($id) {


        $users = DB::select('SELECT  ser.service_man, ser.service_status, ser.kilometer, ser.description, ser.created_at, us.name, us.email, us.phone
FROM services ser, users us
JOIN   car_users cu
ON us.id = cu.user_id
WHERE ser.id = ?', [$id]);



        return $users;

    }

}