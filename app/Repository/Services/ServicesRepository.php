<?php

namespace App\Repository\Services;

use App\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Repository\Car\CarRepository;


class ServicesRepository
{

    private $id;

    public function serviceAdd($request)
    {

        $id = DB::table('services')->insertGetId(
            [
                'car_id' => $request['carID'],
                'service_man' => $request['service_man'],
                'service_status' => 'new',
                'kilometer' => $request['kilometer'],
                'service_date' => $request['service_date'],
                'description' => $request['description'],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        );
        $this->id = $id;
        return $id;
    }

    public function carByID($id)
    {
        $car = DB::table('cars')
            ->where('id', $id)
            ->first();
        return $car;
    }

    public function serviceGetUserCar($id)
    {

        $service = Service::find($id);  // vraca servis pod id

        dd($service);

        // vraca podatke iz car tabele prema id

        return $id;

    }

    public function carInServiceOrCreateNewCar($request)
    {

        $carPlate = new CarRepository();
        $carID = $carPlate->plateHasUser($request['numberplate']);
        if ($carID) {
            $car = $this->carByID($carID);
            $addCar = array(
                'carID' => $carID,
                'numberplate' => strtoupper($request['numberplate']),
                'make' => $car->make,
                'model' => $car->model,
                'engine' => $car->engine,
                'year' => $car->year,
                'mileage' => $car->mileage,

            );
            return view('/admin/admin_service-add', compact('addCar'));

        } else {
            // ovde ce morati da se kreira novi user ako ne postiji
            // sto znaci previ se novi auto complete za listanje usera

            $numberplate = str_replace(' ', '', $request['numberplate']);
            $newCar = array(
                'numberplate' => strtoupper($numberplate)
            );
            return view('/admin/admin_service-createCar', compact('newCar'));
        }

    }

}