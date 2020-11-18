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
        $dataJson = json_decode(file_get_contents("php://input"), true);
        $newAppointment = new Appointment($dataJson['nombre'], $dataJson['tema'], $dataJson['descripcion']);
        $newAppointment->saveAppointment();
    }

    public function delete($data){
        $appointment = new Appointment();
        $appointment->deleteAppointment($data["id"]);
      
    }
    public function getById($data){ //to do refactorizar nombre
        //var_dump($data["id"]);
        $appointment = Appointment::findById($data["id"]);
        $appointmentResponse = ["name" => $appointment->getName(),
        "topic" => $appointment->getTopic(),
        "description" => $appointment->getDescription(),
        "date" => $appointment->getDate(),
        "id" => $appointment->getId(),
        "isDone" => $appointment->getIsDone()]; 
         
        
         echo json_encode($appointmentResponse);
        
    }
    public function update($appointment){
        $dataJson = json_decode(file_get_contents("php://input"), true);
        $newAppointment = new Appointment($dataJson['name'], $dataJson['topic'], $dataJson['description'], $dataJson['id'], $dataJson['isDone']);
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