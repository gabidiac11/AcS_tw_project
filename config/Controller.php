<?php

class Controller extends App
{

    /**
     * @var mixed
     */
    protected $postData;
    private $contModel;

    public function __construct()
    {
        parent::__construct();

        $this->postData = count($_POST) > 0 ? $_POST : json_decode(file_get_contents("php://input"), true);
        $this->contModel = $this->loadModel('MaintenanceQuery');
    }

    public function loadModel($model)
    {
        require_once __DIR__ . '/../Models/' . ucfirst($model) . '.php';
        $modelName = ucfirst($model);
        return new $modelName();
    }

    /**
     * @param string $view
     * @param array $BLOCK
     */
    public function loadView($view, $BLOCK = [])
    {
        if ($this->contModel->verifyStatus() === 2) {
            require_once __DIR__ . '/../Views/' . $view . '.php';
        } else {
            if ($view === 'admin' || $view === 'adminpanel' || $view === 'MaintenanceMode' || $view === 'DatabaseEditor' || $view === 'AdminManager') {
                require_once __DIR__ . '/../Views/' . $view . '.php';
            } else {
                require_once __DIR__ . '/../Views/' . 'Maintenance' . '.php';
            }
        }

    }
}
