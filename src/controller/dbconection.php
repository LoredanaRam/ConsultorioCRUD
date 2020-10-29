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
       $pass = "";
       $dbname = "New_db";
       $charset = "utf8";
       $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
       $pdo = new pdo("mysql:host={$host};dbname={$dbname};charset={$charset}",$user,$pass,$options);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       return $pdo;
   }

}
?>