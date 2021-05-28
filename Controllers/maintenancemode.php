<?php

class maintenancemode extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadView("MaintenanceMode", []);
    }
}
