<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appoitment;
use Illuminate\Support\Facades\Auth;

class AppoitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        if (Auth::user()) {
            $user_id = Auth::user()->id;
        }else{
            $user_id = 0;
        }

        $Appopitment = new Appoitment([
            'user_id' => $user_id,
            'name'=> 'test',
            'last_name'=> 'test',
            'email'=> 'test',
            'phone'=> 'test',
            'veh_make'=> 'test',
            'appoitment'=> '2017-12-12 00:00:00',
            'description'=> 'test',

        ]);

        $Appopitment->save();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
