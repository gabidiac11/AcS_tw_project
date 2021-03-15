<?php

class Controller
{
    
    private function __construct()
    {
        
    }

    public function loadModel($model) {
        require_once __DIR__ . '/../Model/' . ucfirst($model) . '.php';
        $modelName = ucfirst($modulName);
        return new $modelName();
    }

    public function loadView($view, $PARAMS) {
        require_once __DIR__ . '/../Views/' . ucfirst($view) . '.php';
    }
}