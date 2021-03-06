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
use App\Repository\Helper\HelperRepository;

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

    public function serviceCarAdd(Request $request, ServicesRepository $servicesRepository, HelperRepository $helperRepository )
    {
        $user = $request->user();
        $request = $request->all();
        $request['service_man'] = $user->name;
        $carID = $request['carID'];

        $request['service_date'] = $helperRepository->timeFormat($request['service_date']);
        $serviceID = $servicesRepository->save($request);

        if ($carID) {
            $role = UserRole::find($user->role);

            if ($role->name == 'serviceman') {
                return redirect('/service');
            } elseif ($role->name == 'admin') {
                return redirect()->route('/service-editcar/', ['carID' => $carID, 'serviceID'=>$serviceID]);
            } else {
                return redirect('home');
            }
        }
    }

    public function serviceEditCar($carID, $serviceID , CarUserRepository $carUserRepository, ServicesRepository $servicesRepository, Request $request)
    {
        $carUserRepository->getById($carID);
        $carData =  $carUserRepository->userCarData('car', $carID);
        $carData['serviceData'] = $servicesRepository->getById($serviceID);

        return view('/admin/admin_service-edit', compact('carData'));
    }


}
