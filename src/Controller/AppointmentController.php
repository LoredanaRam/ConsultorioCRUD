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
    }

    public function delete($data){
        $appointment = new Appointment();
        $appointment->deleteAppointment($data["id"]);
      
    }
    public function getById($data){ //to do refactorizar nombre
        var_dump($data);
        $appointment = Appointment::findById(25);
        
        




    }
    public function update($appointment){
        $newAppointment = new Appointment($appointment['name'], $appointment['topic'], $appointment['description'], $appointment['id'], $appointment['isDone']);
        $newAppointment->updateAppointment();
    }

    public function getAll(){
        $appointment = new Appointment();
        $appointments = $appointment->showAllAppointments();
        $appointmentResponse = [];
        foreach ($appointments as $appointment) {
            array_push($appointmentResponse, [
                
                "name" => $appointment->getName(),
                "topic" => $appointment->getTopic(),
                "description" => $appointment->getDescription(),
                "date" => $appointment->getDate(),
                "id" => $appointment->getId(),
                "isDone" => $appointment->getIsDone(),
               
            ]);
        }

        echo json_encode($appointmentResponse);
    
        
    }
}

?>