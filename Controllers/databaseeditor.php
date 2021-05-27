<?php

class databaseeditor extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadView("DatabaseEditor", []);
    }
}
