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
        $this->loadView("Layout/Bottom", []);
    }
}
