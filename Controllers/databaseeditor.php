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
    public function removeElem(){
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            echo json_encode($this->databaseManager->removeID($this->postData));
        }else{
            $this->loadView("databaseeditor", []);
        }
    }
    public function removeRangeElem(){
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            echo json_encode($this->databaseManager->removeRangeID($this->postData));
        }else{
            $this->loadView("databaseeditor", []);
        }
    }
}
