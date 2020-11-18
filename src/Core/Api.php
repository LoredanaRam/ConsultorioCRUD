<?php

namespace App\Core;

use App\Controller\AppointmentController;

class Api
{
    public $Controller;

    public function __construct() // revisar si se puede hacer switch
    {
        $this->Controller = new AppointmentController;
        echo $_SERVER['REQUEST_URI'];

        if ($_SERVER['REQUEST_URI'] == "/consultorioF5/api/appointment")
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
                $this->Controller->update($_PUT);
                
            }

            if ($_SERVER['REQUEST_METHOD'] == "DELETE")
            {
                $this->Controller->delete($_DELETE);
                
            }
        }

        if ($_SERVER['REQUEST_URI'] == "/consultorioF5/api/appointments")
        {
            $this->Controller->getAll();
        }
    }
}

