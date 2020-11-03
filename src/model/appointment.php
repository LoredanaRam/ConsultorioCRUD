<?php

    namespace App\Model;

    require('dbconection.php');

    class Appointment {
        
        private string $name;
        private string $topic;
        private string $description;
        private ?int $id;
        private ?string $date;
        private $database;
        private $table = "citas";

        public function __construct($name = '', $topic = '', $description = ''){
            
            $this->name = $name;
            $this->topic = $topic;
            $this->description = $description;
            
            //clausula de guarda
            if(!$this->database){
                $this->database = new DbConection();
            }
        }

        public function showAllAppointments(){
            $sql = "SELECT * FROM `{$this->table}`";
            $query = $this->database->mysql->query($sql);
            var_dump ($query);
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

<?php 
    $data = new Appointment();
    $result = $data->showAllAppointments();
    var_dump($result);
?>
