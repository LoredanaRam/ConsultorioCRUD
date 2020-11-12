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

            if ($_SERVER['REQUEST_METHOD'] == "POST")

            if ($_SERVER['REQUEST_METHOD'] == "PUT")

            if ($_SERVER['REQUEST_METHOD'] == "DELETE")
        }

        if (isset($_GET) && isset($_GET["action"]) && ($_GET["action"] == "delete")){
            $id = $_GET["id"];
            $this->delete($id);
            return;
        }
        if (isset($_GET) && isset($_GET["action"]) && ($_GET["action"] == "create")){
            $this->create($_POST);
            return;
        }
        if (isset($_GET) && isset($_GET["action"]) && ($_GET["action"] == "upload")){
            $this->upload($_POST["id"]);
            return;
        }
        if (isset($_GET) && isset($_GET["action"]) && ($_GET["action"] == "update")){
            $this->update($_POST);
            return;
        }
    }
}

