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
        private $database;
        private $table = "citas";

        public function __construct($name = '', $topic = '', $description = '', $date = ''){
            
            $this->name = $name;
            $this->topic = $topic;
            $this->description = $description;
            $this->date = $date;
            
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

        public function showAllAppointments(){
            $sql = "SELECT * FROM `{$this->table}`";
            $query = $this->database->mysql->query($sql);
            $appointmentArr = $query->fetchAll();
            $appointmentList = [];
            foreach ($appointmentArr as $cita) {
                $appointmentRow = new Appointment($cita['nombre'], $cita['tema'], $cita['descripcion'], $cita['fecha']);
                array_push($appointmentList, $appointmentRow);
            }
            return $appointmentList;
        }

        public function saveAppointment(){
            
        }

        public function editAppointment($id){

        }

        public function deleteAppointment(){

        }

        public function getAppointment($id){

        }

    };
?>
