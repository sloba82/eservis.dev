<?php

namespace App\Http\Controllers;

use App\CardReader;
use Illuminate\Http\Request;
use App\Repository\CardReader\CardReaderRepository;

class CardReaderController extends Controller
{




    public function cardReared($data)
    {


        $cardReader = new CardReaderRepository($data);



        $data = str_replace('{','', $data);
        $data = str_replace('}','', $data);
        $data = str_replace(',,,',',', $data);
        $data = str_replace('VehicleData:','', $data);
        $data = str_replace('DocumentData:','', $data);
        $data = str_replace('DocumentData:','', $data);
        $data = str_replace('PersonalData:','', $data);
        $data = str_replace('[]', '', $data);

        $datas = explode(',', $data);

        array_push($datas,$datas[32] = $datas[32].' '.$datas[33].' '.$datas[34].' '.$datas[35]);

        $newData = array();
        foreach ($datas as $item){

            if ( preg_match('/([^-]+):([^-]+)/', $item)){
                $string = explode(':',$item);
            }else {
                continue;
            }

            if ($string[0] && $string[1] ) {
                $newData[$string[0]] = $string[1];
            }
            else {
                continue;
            }
        }

        return view('/card/card_reader', compact('newData'));

    }


}
