<?php

class Index extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->router->redirect('/');
    }

    public function home()
    {
        $this->loadView("Layout/Head", ['prependedTitle' => 'Home - ']);
        $this->loadView("Index", ['name' => 'salut']);
        $this->loadView("Layout/Bottom", ['name' => 'salut']);
    }
}
