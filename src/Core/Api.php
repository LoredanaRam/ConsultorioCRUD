<?php

namespace App\Core;

use App\Controller\AppointmentController;

class Api
{
    public $Controller;

    public function __construct() // revisar si se puede hacer switch
    {
        $this->Controller = new AppointmentController;
    

        if ($_SERVER['REQUEST_URI'] == "/appointment")
        {
            if ($_SERVER['REQUEST_METHOD'] == "GET")
            {
                $this->Controller->getById($_GET);
                return;
            }

            if ($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $this->Controller->create($_POST);
                return;
            }

            if ($_SERVER['REQUEST_METHOD'] == "PUT")
            {
                $this->Controller->update($_PUT);
                return;
            }

            if ($_SERVER['REQUEST_METHOD'] == "DELETE")
            {
                $this->Controller->delete($_DELETE);
                return;
            }
        }

        if ($_SERVER['REQUEST_URI'] == "/appointments")
        {
            return $this->Controller->getAll();
            
        }
    }
}

