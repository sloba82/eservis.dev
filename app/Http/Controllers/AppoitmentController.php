<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appoitment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Repository\Appointment\AppointmentRepository;


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
        $AppointmentRepository = new AppointmentRepository();
        return $AppointmentRepository->showAppointment();

    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $params = $request->all();




        foreach ($params as $key => $value) {
            if ($value == null) {
                return redirect('/');
            }
        }

        if (Auth::user()) {
            $user_id = Auth::user()->id;
        } else {
            $user_id = 0;
        }
        $dateAndTime = str_replace("/", "-", $params['appoitment']);
        $dateAndTime .= ':00';


        $Appopitment = new Appoitment([
            'user_id' => $user_id,
            'name' => $params['name'],
            'last_name' => $params['last_name'],
            'email' => $params['email'],
            'phone' => $params['phone'],
            'veh_make' => $params['veh_make'],
            'appoitment' => $dateAndTime,
            'description' => $params['description'],
            'comment_admin' => 'nema komentara',
            'active' => 1,
            'confirm' => 0

        ]);

        $Appopitment->save();
        return redirect('/');

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
            $Appopitment = 'Nothing to show';
        }

        return view('/admin/admin_appointment_edit', compact('Appopitment'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $Appopitment = Appoitment::findOrFail($id);
        $Appopitment->update($request->all());

        return redirect('/appoitment/showAll');

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

        return redirect('admin/');

    }
}
