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
        if (isset($_POST)&&($_POST["action"]=="create")){
            $this->create();
            return ;
        }
        return $this->index();

    }

    public function create(array $request): void 
    {
        $newAppointment = new Appointment($request["nombre"] , $request["tema"] , $request ["descripcion"]); 
        $newAppointment->saveAppointment();

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


