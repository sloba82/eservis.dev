<?php

namespace App\Http\Controllers;

use App\Appoitment;
use App\Repository\Appointment\AppointmentRepository;
use Illuminate\Http\Request;
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
        $allapointments = Appoitment::all();
        return view('admin.appointment.index', compact('allapointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, AppointmentRepository $appointmentRepository)
    {

        $params = $request->all();
        $params['user_id'] = '';
        if (Auth::user()) {
            $params['user_id'] = Auth::user()->id;
        } else {
            $params['user_id'] = 0;
        }

        $params['dateAndTime'] = str_replace("/", "-", $params['appoitment']);
        $params['dateAndTime'] .= ':00';

        $appointmentRepository->saveAppointment($params);

        return redirect('/');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Appopitment = Appoitment::find($id);
        if (!$Appopitment) {
            $Appopitment = 'Nothing to show';
        }

        return view('admin.appointment.edit', compact('Appopitment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (strpos($request['appoitment'], '/')) {
            $dateAndTime = str_replace("/", "-", $request['appoitment']);
            $dateAndTime .= ':00';
            $request['appoitment'] = $dateAndTime;
        }

        var_dump($request['confirm']);
        $request['confirm'] = intval($request['confirm']);
        $Appopitment = Appoitment::findOrFail($id);
        $Appopitment->update($request->all());

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
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

    public function ajaxConfirm(Request $request)
    {

        $id = $request['AppData']['id'];
        if ($request['AppData']['field'] == 'active') {
            $value = 0;
        } else {
            $value = 1;
        }

        if ($request['AppData']['field']) {
            $Appopitment = Appoitment::findOrFail($id);
            $Appopitment->update([$request['AppData']['field'] => $value]);

            $data = 'test';
            return response()->json([
                'success' => true,
                'data' => $data,
            ], 200);
        }
    }

}



