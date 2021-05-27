<?php

class Index extends Controller
{
    private $indexModel;

    function __construct()
    {
        parent::__construct();
        $this->indexModel = $this->loadModel("MaintenanceQuery");
    }

    public function index()
    {
        if ($this->indexModel->verifyStatus() === 0) {
            $this->router->redirect('/about');
        } else {
            $this->router->redirect('/maintenance');
        }
    }
}
