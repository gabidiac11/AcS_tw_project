<?php

class Controller extends App
{

    /**
     * @var mixed
     */
    protected $postData;

    public function __construct()
    {
        parent::__construct();

        $this->postData = json_decode(file_get_contents("php://input"), true);
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
