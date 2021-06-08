<?php

class contact extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
            $this->loadView("Contact", []);
    }

    /**
     * send a contact message using the contact form
     */
    public function send() {
        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $this->loadView('Contact', $this->loadModel('ContactModel')->send($_POST));
        } else {
            $this->loadView('NotFound');
        }
    }
}
