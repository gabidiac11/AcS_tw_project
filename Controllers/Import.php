
<?php

class Import extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // $this->loadModel("DatabaseUtl")->phpCsvToDb();
    }

    public function csv() {
        //verify if an admin is logged, otherwise deny action 
            $this->loadModel("DatabaseUtl")->importFromCsvFile();
        // } else {
        //     header($_SERVER["SERVER_PROTOCOL"]." 401 Unauthorized");
        //     die("");
        // }
    }
}