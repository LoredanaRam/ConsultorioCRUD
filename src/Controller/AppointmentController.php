<?php 

namespace App\Controller;

use App\Core\View;
use App\Model\Appointment;
use phpDocumentor\Reflection\Location;
use App\Logger\Logger;
// require('src/Model/appointment.php');
// require('src/Core/View.php');

class AppointmentController {

    public function create(array $data)
    {
        $dataJson = json_decode(file_get_contents("php://input"), true);
        $newAppointment = new Appointment($dataJson['nombre'], $dataJson['tema'], $dataJson['descripcion']);
        $newAppointment->saveAppointment();
        $logger = new Logger($newAppointment, "create");
        $logger->log();
    }

    public function delete($data){
        $appointment = new Appointment();
        $appointment->deleteAppointment($data["id"]);
        $logger = new Logger($appointment, "delete");
        $logger->log();
      
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
        $logger = new Logger($newAppointment, "update");
        $logger->log();
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