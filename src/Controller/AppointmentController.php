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
        if (isset($_GET)&& isset($_GET["action"])=="create"){
            $this->create($_GET);
            echo $_GET;
            return ;
        }
        return $this->index();

        if (isset($_GET)&& isset($_GET["action"])=="delete"){
            $this->delete($_GET["id"]);
            return ;
            
        }
        
        return $this->index();
        

    }

    public function create(array $request): void 
    {
        $newAppointment = new Appointment($request["nombre"] , $request["tema"] , $request ["descripcion"]); 
        $newAppointment->saveAppointment();

        $this->index();

    }

    public function delete($id){
        $appointment = new Appointment();
        $cita = $appointment->findById($id);
        $cita->$delete();
        $this->index();
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


