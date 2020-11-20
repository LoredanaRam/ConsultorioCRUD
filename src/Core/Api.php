<?php

namespace App\Core;

use App\Controller\AppointmentController;

class Api
{
    public $Controller;

    public function __construct() // revisar si se puede hacer switch
    {
        $this->Controller = new AppointmentController;
      
        if ($_GET["url"] == "api/appointment")
        {
            if ($_SERVER['REQUEST_METHOD'] == "GET")
            {
                $this->Controller->getById($_GET);
                
                
            }

            if ($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $this->Controller->create($_POST);
                
            }

            if ($_SERVER['REQUEST_METHOD'] == "PUT")
            {
                $this->Controller->update($_POST);
                
            }

            if ($_SERVER['REQUEST_METHOD'] == "DELETE")
            {
                $this->Controller->delete($_GET);
                
            }
        }

        if ($_GET["url"] == "api/appointments") 
        {
            $this->Controller->getAll();
        }
    }
}

