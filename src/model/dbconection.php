<?php

namespace App\Model;

use PDO;
use PDOException;

class DbConection {

   public $mysql;

   public function __construct()
   {
       try {
           $this->mysql = $this->getConection();
       } catch (PDOException $ex){
           echo $ex->getMessage();
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
       $pdo = new PDO("mysql:host={$host};dbname={$dbname};charset={$charset}", $user, $pass, $options);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       return $pdo;
   }

}
?>

<?php 
/*     $database = new DbConection();
    $data = $database->mysql->query("SELECT * FROM `citas`");
    var_dump($data);
 */?>