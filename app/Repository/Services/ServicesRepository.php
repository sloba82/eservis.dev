<?php

namespace App\Repository\Services;

use App\Service;
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

        $service = Service::find($id);  // vraca servis pod id
        $service->serviceCar; // vraca podatke iz car tabele prema id

        

        return $id;

    }

}