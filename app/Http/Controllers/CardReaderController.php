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

        $newData = $cardReader;


        return view('/card/card_reader', compact('newData'));

    }


}
