<?php

namespace App\Repository\CardReader;

use App\User;
use App\CardReader;
use App\Repository\Car\CarRepository;

class CardReaderRepository
{

    private $data;
    private $rawCardData;


    public function __construct($data)
    {
        $this->data = $this->cardReaderDataToArray($data);
        $this->rawCardData = $data;

    }


    public function cardReaderDataToArray($data)
    {
        $data = str_replace(['{', '}', '/', 'VehicleData:', 'DocumentData:', 'PersonalData:', '[]'], '', $data);
        $data = str_replace(',,,', ',', $data);

        $datas = explode(',', $data);

        array_push($datas, $datas[32] = $datas[32] . ' ' . $datas[33] . ' ' . $datas[34] . ' ' . $datas[35]);

        $newData = array();
        foreach ($datas as $item) {

            if (preg_match('/([^-]+):([^-]+)/', $item)) {
                $string = explode(':', $item);
            } else {
                continue;
            }

            if ($string[0] && $string[1]) {
                $newData[$string[0]] = $string[1];
            } else {
                continue;
            }
        }

        return $newData;
    }


    public function getCardRederData()
    {
        return $this->data;
    }

    public function saveCardReaderData()
    {

            $cardReader = new CardReader([
                'car_id' => 0,
                'card_data' => $this->rawCardData,

            ]);
            $cardReader->save();

    }


}