<?php

class Search extends Controller
{
    /**
     * @var SearchModel
     */
    private $searchModel;
    private $searchMainModel;

    function __construct()
    {
        parent::__construct();

        $this->searchMainModel = $this->loadModel("MaintenanceQuery");
        $this->searchModel = $this->loadModel("SearchModel");
    }

    public function index()
    {
        if ($this->searchMainModel->verifyStatus() === 0) {
            $this->loadView("Search", []);
        }else{
            $this->loadView("Maintenance", []);
        }
    }

    public function accidents() {
        echo json_encode($this->searchModel->getAccidents());
    }

    public function filters() {
        echo json_encode($this->searchModel->getFilters(), JSON_PRETTY_PRINT);
    }

    public function results() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo json_encode($this->searchModel->getResults($this->postData), JSON_PRETTY_PRINT);
        } else {
            $this->loadView("NotFound", []);
        }
    }
}
