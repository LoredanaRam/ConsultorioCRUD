<?php 

namespace App\Controller;

use App\Core\View;
use App\Model\Appointment;
use phpDocumentor\Reflection\Location;
// require('src/Model/appointment.php');
// require('src/Core/View.php');

class AppointmentController {

    public function create(array $data)
    {
        $newAppointment = new Appointment($data['nombre'], $data['tema'], $data['descripcion']);
        $newAppointment->saveAppointment();

        $this->index();
    }

    public function delete($data){
        $appointment = new Appointment();
        $appointment->deleteAppointment($data["id"]);
      
    }
    public function getById($data){ //to do refactorizar nombre
        $appointment = Appointment::findById($data["id"]);
        return $appointment; 
    }
    public function update($appointment){
        $newAppointment = new Appointment($appointment['name'], $appointment['topic'], $appointment['description'], $appointment['id']);
        $newAppointment->updateAppointment();
    }

    public function getAll(){
        $appointment = new Appointment();
        $appointments = $appointment->showAllAppointments();
        return $appointments;

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