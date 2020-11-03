<?php 

namespace App\Controller;

use App\Model\Appointment;
require('src/Model/appointment.php');

class AppointmentController {


    public function index(): void 
    {
        $appointment = new Appointment();
        $appointments = $appointment->showAllAppointments();
    }
}


?>