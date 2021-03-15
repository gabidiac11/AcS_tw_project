<?php

class Index extends Controller
{

    function __construct()
    {

    }

    public function index() {
        echo "index";
    }

    public function home()
    {
        $this->loadView("Index", ['name' => 'salut']);
    }
}
