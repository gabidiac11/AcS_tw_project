<?php

class Maintenance extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->loadView("maintenance", []);
    }
}
