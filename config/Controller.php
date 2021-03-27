<?php

class Controller extends App
{

    public function __construct()
    {
        parent::__construct();
    }

    public function loadModel($model)
    {
        require_once __DIR__ . '/../Models/' . ucfirst($model) . '.php';
        $modelName = ucfirst($model);
        return new $modelName();
    }

    public function loadView($view, $BLOCK)
    {
        require_once __DIR__ . '/../Views/' . $view . '.php';
    }
}
