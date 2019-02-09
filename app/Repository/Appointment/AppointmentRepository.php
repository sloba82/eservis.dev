<?php
namespace App\Repository\Appointment;



use App\Appoitment;



class AppointmentRepository
{


    public function showAppointment()
    {

        $allapointments = new Appoitment();
        return view('/admin/admin_appointment_allresoult', compact('allapointments'));
    }




}