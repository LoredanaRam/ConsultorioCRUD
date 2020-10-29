<?php

use PDO;
use PDOException;

class dbConection {

   public $sql;

   public function __construct()
   {
       try {
           $this->sql = $this->getConection();
       } catch (PDOException $execp){
           echo $execp->getMessage();
       }

   }

   private function getConection()
   {
       $host = "208.91.198.16";
       $user = "pixelkeb_turtles";
       $pass = "3E:%9yb$";
       $dbname = "pixelkeb_consultoriof5";
       $charset = "utf8";
       $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
       $pdo = new pdo("mysql:host={$host};dbname={$dbname};charset={$charset}",$user,$pass,$options);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       return $pdo;
   }

}
?>