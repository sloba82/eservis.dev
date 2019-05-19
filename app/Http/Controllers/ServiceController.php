<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\CarUser;
use App\Repository\Services;
use App\UserRole;
use App\Repository\Car\CarRepository;
use App\Repository\CarUser\CarUserRepository;

class ServiceController extends Controller
{


    public function index()
    {

    }

    public function autocompleteNumberPlates(Request $request)
    {

        $value = $request['AppData']['term'];
        $Cars = DB::table('cars')
            ->where('numberplate', 'like', '%'.$value .'%')
            ->limit(10)
            ->get();

        $numberPlate = array();
        foreach ($Cars as $Car) {
            array_push($numberPlate, $Car->numberplate);
        }
        return response()->json($numberPlate);
    }

    public function carInServiceOrCreateNewCar(Request $request)
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

    public function carByID($id)
    {
        $car = DB::table('cars')
            ->where('id', $id)
            ->first();
        return $car;
    }

    public function serviceCarAdd(Request $request)
    {
        $user = $request->user();
        $request = $request->all();
        $request['service_man'] = $user->name;
        $carID = $request['carID'];

        if ($carID) {
            $role = UserRole::find($user->role);

            if ($role->name == 'serviceman') {
                return redirect('/service');
            } elseif ($role->name == 'admin') {
                return redirect('/service-editcar/' . $carID);
            } else {
                return redirect('home');
            }
        }
    }

    public function serviceCarEdit($id)
    {
        $carUser = new CarUserRepository('car', $id);
        dd($carUser);
        $services = new Services\ServicesRepository();
        $id = $services->serviceGetUserCar($id);

        return view('/admin/admin_service-edit', compact('id'));
    }


}
