<?php

    namespace App\Model;

    use App\Model\DbConection;

    // require('Dbconection.php');

    class Appointment {
        
        private string $name;
        private string $topic;
        private string $description;
        private ?int $id;
        private ?string $date;
        private bool $isDone;
        private $database;
        private $table = "citas";

        public function __construct($name = "nombre", $topic = "tema", $description = "descripcion", $id = null, $date = "", $isDone = false){
            
            $this->name = $name;
            $this->topic = $topic;
            $this->description = $description;
            $this->date = $date;
            $this->isDone = $isDone;
            $this->id = $id;
            
            //clausula de guarda
            if(!$this->database){
                $this->database = new DbConection();
            }
        }

        public function getName()
        {
            return $this->name;
        }

        public function getTopic()
        {
            return $this->topic;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function getDate() 
        {
            return $this->date;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getIsDone()
        {
            return $this->isDone;
        }


        public function showAllAppointments(){
            $sql = "SELECT * FROM `{$this->table}`";
            $query = $this->database->mysql->query($sql);
            $appointmentArr = $query->fetchAll();
            $appointmentList = [];
            foreach ($appointmentArr as $cita) {
                $appointmentRow = new Appointment($cita['nombre'], $cita['tema'], $cita['descripcion'], $cita['id'], $cita['fecha'], $cita['realizada'] );
                array_push($appointmentList, $appointmentRow);
          
            }
           
            return $appointmentList;
            
        }

        public function saveAppointment(){
            $sql = "INSERT INTO `{$this->table}` (`nombre`, `tema`, `descripcion`, `realizada` ) VALUES ('$this->name', '$this->topic', '$this->description', '$this->isDone');";
            $this->database->mysql->query($sql);              
        }

        public static function findById($id)
        {
            $database = new DbConection();
            $sql = "SELECT * FROM `citas`  WHERE `id` = {$id} ";
            $query = $database->mysql->query($sql); 
            $result = $query->fetchAll();
            return new self($result[0]["nombre"], $result[0]["tema"], $result[0]["descripcion"], $result[0]["realizada"]);
        }

        public function updateAppointment(){
            $sql = "UPDATE `citas` SET `nombre` = '$this->name', `tema` = '$this->topic', `descripcion` = '$this->description', `realizada` = '$this->isDone' WHERE `id` = '$this->id' ";
            $this->database->mysql->query($sql);    
        }

        public function deleteAppointment($id){
            $sql = "DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$id}";
            $this->database->mysql->query($sql);
        }

        public function getAppointment($id){

        }
    };
?>