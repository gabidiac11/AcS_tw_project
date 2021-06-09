<?php

class databaseeditor extends Controller
{
    private $databaseManager;
    function __construct()
    {
        parent::__construct();
        $this->databaseManager = $this->loadModel("DatabaseQuery");
    }

    public function index()
    {
        $this->loadView("DatabaseEditor", []);
    }

    public function addElem(){
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            echo json_encode($this->databaseManager->addNewRow($this->postData));
        }else{
            $this->loadView("databaseeditor", []);
        }
    }
}
