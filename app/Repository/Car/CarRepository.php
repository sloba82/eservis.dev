<?php

namespace App\Repository\Car;

use App\Car;
use Illuminate\Support\Facades\DB;


class CarRepository
{

    public function checkPlateNumber($numberplate)
    {

        if (Car::where('numberplate', $numberplate)->first()) {
            return 1;
        } else {
            return 0;
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


}