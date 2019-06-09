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
use App\Repository\Services\ServicesRepository;

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
        $servicesRepository = new ServicesRepository();
        return $servicesRepository->carInServiceOrCreateNewCar($request);
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
        $carUser = new CarUserRepository();
        $carData =  $carUser->userCarData('car', $id);

        var_dump($carData);

        return view('/admin/admin_service-edit', compact('carData'));
    }


}
