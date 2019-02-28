<?php

namespace App\Http\Controllers;

use App\User;
use App\CardReader;
use Illuminate\Http\Request;
use App\Repository\CardReader\CardReaderRepository;

class CardReaderController extends Controller
{

    public function getCardReader($data)
    {
        $cardReader = new CardReaderRepository($data);
        $newData = $cardReader->getData();

        $userRole = User::where('email', $newData['email'])->first();

        if ($userRole->role == 1 && $newData['key'] == 'test') {
            // should be set somewere elase
            $cardReader->saveRawCardReaderData();


            return view('/card/card_reader', compact('newData'));
        } else {
            return 'email is not valid or not in database';
        }

    }


}
