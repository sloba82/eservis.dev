<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{


    public function index()
    {

    }

    public function autocompleteNumberPlates(Request $request){

        $value =$request['AppData']['term'];
        $Cars = DB::table('cars')
            ->where('numberplate', 'like', '%'.$value.'%')
            ->limit(5)
            ->get();

        $numberPlate = array();
        foreach ($Cars as $Car) {
            array_push($numberPlate, $Car->numberplate);
        }

        return response()->json($numberPlate);
    }
}
