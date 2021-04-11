<?php

class NotFound extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->loadView("NotFound", []);
    }
}
