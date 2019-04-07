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

    public function saveAppointment($params) {

        $Appopitment = new Appoitment([
            'user_id' => $params['user_id'],
            'name' => $params['name'],
            'last_name' => $params['last_name'],
            'email' => $params['email'],
            'phone' => $params['phone'],
            'veh_make' => $params['veh_make'],
            'appoitment' => $params['dateAndTime'],
            'description' => $params['description'],
            'comment_admin' => 'Nema komentar',
            'active' => 1,
            'confirm' => 0
        ]);
        $Appopitment->save();
    }



}