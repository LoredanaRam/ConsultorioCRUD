<?php

namespace App\logger;

class Logger{
    private $action;
    private $appointment;

    public function __construct($appointment, $action){
        $this->appointment = $appointment;
        $this->action = $action;        
    }

    public function log(){
        $date = date("d/m/Y H:i:s");
        $string = "fecha: {$date} cita: {$this->appointment->getName()} action: {$this->action} id: {$this->appointment->getId()} \n";
        $file = fopen("Logger.txt", "a+");
        fwrite($file, $string);
        fclose($file);
    }

}

?>