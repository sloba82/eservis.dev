<?php

namespace App\Repository\CardReader;

use App\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;




class CardReaderRepository
{

    protected $data;


    public function __construct( $data ) {



        $this->data = $data;
    }



    public function test() {



    }



}