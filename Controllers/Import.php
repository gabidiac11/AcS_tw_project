
<?php

class Import extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadModel("DatabaseUtl")->phpCsvToDb();
    }
}
