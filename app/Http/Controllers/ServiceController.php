<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Car_user;

class ServiceController extends Controller
{


    public function index()
    {

    }

    public function autocompleteNumberPlates(Request $request)
    {

        $value = $request['AppData']['term'];
        $Cars = DB::table('cars')
            ->where('numberplate', 'like', '%' . $value . '%')
            ->limit(5)
            ->get();

        $numberPlate = array();
        foreach ($Cars as $Car) {
            array_push($numberPlate, $Car->numberplate);
        }

        return response()->json($numberPlate);
    }


    public function carInServiceOrCreateNewCar(Request $request)
    {

        $numberplate = $request['numberplate'];
        $plateID = $this->plateHasUser($numberplate);
        if ($plateID) {


            //hardkodovani podaci
            $serviceMan = 'test';
            $serviceStatus = 'new';
            $serviceID = $this->serviceAdd($plateID, $serviceMan, $serviceStatus);

            $car = $this->carByID($plateID);

            $addCar = array(
                'plateID'     => $plateID,
                'numberplate' => strtoupper($numberplate),
                'serviceID'   => $serviceID,
                'make'        => $car->make,
                'model'       => $car->model,
                'engine'      => $car->engine,
                'year'        => $car->year,

            );

            
            return view('/admin/admin_service-add', compact('addCar'));

        } else {
            // ovde ce morati da se kreira novi user ako ne postiji
            // sto znaci previ se novi auto complete za listanje usera


            $numberplate = str_replace(' ', '', $numberplate);
            $newCar = array(
                'numberplate' => strtoupper($numberplate)
            );

            return view('/admin/admin_service-createCar', compact('newCar'));
        }
    }

    public function plateHasUser($param)
    {

        $numberplate = $param;
        $plates = DB::table('cars')
            ->select('id')
            ->where('numberplate', $numberplate)
            ->limit(1)
            ->get();

        $plateID = '';
        foreach ($plates as $plate) {
            $plateID = $plate->id;
        }
        if ($plateID) {
            return $plateID;
        } else {
            return 0;
        }

    }

    public function carByID($id)
    {

        $car = DB::table('cars')
            ->where('id', $id)
            ->first();

        return $car;
    }

    public function serviceAdd($carID, $serviceMan, $serviceStatus)
    {
        $id = DB::table('services')->insertGetId(
            [
                'car_id' => $carID,
                'service_man' => $serviceMan,
                'service_status' => $serviceStatus
            ]
        );

        return $id;
    }
}
