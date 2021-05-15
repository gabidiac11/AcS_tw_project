<?php

class Search extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadView("Search", []);
    }

    public function accidents() {
        /**
         * @var SearchModel
         */
        $searchModel = $this->loadModel("SearchModel");
        echo json_encode($searchModel->getAccidents());
    }
}
