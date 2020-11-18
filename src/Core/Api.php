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

        if ($_SERVER['REQUEST_URI'] == "/consultorioF5/api/appointment/")
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

        if ($_SERVER['REQUEST_URI'] == "/consultorioF5/api/appointments/")
        {
            header('Content-Type: application/json');
            echo $this->Controller->getAll(); 
        }
    }
}

