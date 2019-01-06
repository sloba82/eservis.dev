<?php

namespace App\Repository\Services;


use App\Car;
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
            ]
        );

        return $id;
    }

}