<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appoitment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AppoitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        //
       

    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    // Show all Apoitments
    public function showAll()
    {
        $Appopitment = new Appoitment();
        echo $Appopitment->all();
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $params = $request->all();



/*
        $valid = Validator::make($params, Appoitment::$rules);


        if ($valid->fails()) {
           $response = response()->json(array('message' => 'response.invalid' ), 400);
      $message = 'popunite sva polja';
      return redirect()->route('/home')->with(['message'=>$message]);;


        }
*/
       foreach ($params as $key => $value) {
            if ($value == null) {
                return redirect('/home');  
            }
        }

        if (Auth::user()) {
            $user_id = Auth::user()->id;
        } else {
            $user_id = 0;
        }


        $dateAndTime = str_replace("/","-", $params['appoitment']);
        $dateAndTime .=':00';    
       
        $Appopitment = new Appoitment([
            'user_id' => $user_id,
            'name' => $params['name'] ,
            'last_name' => $params['last_name'],
            'email' => $params['email'],
            'phone' => $params['phone'],
            'veh_make' => $params['veh_make'],
            'appoitment' => $dateAndTime,
            'description' => $params['description'],
            'active' => 1,
            'confirm' => 1

        ]);

        $Appopitment->save();
        return view('../welcome');

    }

    /**
     * Display the specified resource.
     * @param  int $id
     * @return Appoitment
     */
    public function show($id)
    {
        //Show by id
        $Appopitment = Appoitment::find($id);

        if (!$Appopitment) {
            return 'Nothing to show';
        }
        return $Appopitment->name;
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Appopitment = Appoitment::find($id);

        if (!$Appopitment) {
            return 'No Record';
        }
        $Appopitment->update([

            'user_id' => 3,
            'name' => 'test update',
            'last_name' => 'test update',
            'email' => 'test update',
            'phone' => 'test update',
            'veh_make' => 'test update',
            'active' => 2,
            'confirm' => 3,
            'appoitment' => '2017-12-12 00:00:00',
            'description' => 'test update'
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Appopitment = Appoitment::find($id);
        $Appopitment->delete();


    }
}
