<?php

class Controller extends App
{

    public function __construct()
    {
        parent::__construct();
    }

    public function loadModel($model)
    {
        require_once __DIR__ . '/../Model/' . ucfirst($model) . '.php';
        $modelName = ucfirst($modulName);
        return new $modelName();
    }

    public function loadView($view, $BLOCK)
    {
        require_once __DIR__ . '/../Views/' . $view . '.php';
    }
}
