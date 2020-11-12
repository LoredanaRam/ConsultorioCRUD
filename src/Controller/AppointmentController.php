<?php 

namespace App\Controller;

use App\Core\View;
use App\Model\Appointment;
use phpDocumentor\Reflection\Location;
// require('src/Model/appointment.php');
// require('src/Core/View.php');

class AppointmentController {

    public function __construct() // revisar si se puede hacer swich
    {
        if (isset($_GET) && isset($_GET["action"]) && ($_GET["action"] == "delete")){
            $id = $_GET["id"];
            $this->delete($id);
            return;
        }
        if (isset($_GET) && isset($_GET["action"]) && ($_GET["action"] == "create")){
            $this->create($_POST);
            return;
        }
        if (isset($_GET) && isset($_GET["action"]) && ($_GET["action"] == "upload")){
            $this->upload($_POST["id"]);
            return;
        }
        if (isset($_GET) && isset($_GET["action"]) && ($_GET["action"] == "update")){
            $this->update($_POST);
            return;
        }

        return $this->index();
        
    }

    public function create(array $data)
    {
        $newAppointment = new Appointment($data['nombre'], $data['tema'], $data['descripcion']);
        $newAppointment->saveAppointment();

        $this->index();
    }

    public function delete($id){
        $appointment = new Appointment();
        // $rowToDelete = $appointment->findById($id);
        $appointment->deleteAppointment($id);
        
        $this->index();
    }
    public function upload($id){ //to do refactorizar nombre
        $appointment = Appointment::findById($id);
        new View("AppointmentEdit", ["appointment" => $appointment]);

    }
    public function update($appointment){
        $newAppointment = new Appointment($appointment['name'], $appointment['topic'], $appointment['description'], $appointment['id']);
        $newAppointment->updateAppointment();
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