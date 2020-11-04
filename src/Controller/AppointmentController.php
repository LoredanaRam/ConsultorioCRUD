<?php 

namespace App\Controller;

use App\Core\View;
use App\Model\Appointment;
use phpDocumentor\Reflection\Location;
// require('src/Model/appointment.php');
// require('src/Core/View.php');

class AppointmentController {

    public function __construct()
    {
        return $this->index();
    }

    public function index(): void
    {
        $appointment = new Appointment();
        $appointments = $appointment->showAllAppointments();
        
        new View("AppointmentList", [
            "appointments" => $appointments,
        ]);
    }
}

?>

