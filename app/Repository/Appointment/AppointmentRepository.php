<?php
namespace App\Repository\Appointment;


use Illuminate\Http\Request;
use App\Appoitment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Repository\Appointment\AppointmentRepository;
use Illuminate\Routing\Redirector;


class AppointmentRepository
{


    public function showAppointment()
    {

        $allapointments = new Appoitment();
        return view('/admin/admin_appointment_allresoult', compact('allapointments'));
    }




}