<?php

class Search extends Controller
{
    /**
     * @var SearchModel
     */
    private $searchModel;

    function __construct()
    {
        parent::__construct();

        $this->searchModel = $this->loadModel("SearchModel");
    }

    public function index()
    {
        $this->loadView("Search", []);
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
    
    public function export() {
        $this->loadModel("ExportModel")->exportCSVResults();
    }
}
