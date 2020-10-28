<?php

use PDO;
use PDOException;

class dbConection {

   public $sql;

   public function __construct()
   {
       try {
           $this->sql = $this->getConection();
       }

   }

   private function getConection()
   {
       $host = "localhost";
       $user = "root";
   }

}
?>