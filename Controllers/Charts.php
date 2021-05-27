<?php

class Charts extends Controller
{

    /**
     * @var ChartModel
     */
    private $chartModel;

    function __construct()
    {
        parent::__construct();


        $this->chartModel = $this->loadModel("ChartModel");
    }

    public function index()
    {
        $this->router->redirect('/charts/cases');
    }

    public function cases()
    {
        $this->loadView("Charts", ['page' => 'cases', 'sourcePathname' => '/charts/getCases', 'title' => 'Number of casses per state', 
        
        'description' => '
            <p> Each slice represents a proportion of tracked data of casses that happened in a certain state. Hover to see have a better look.</p>
            <p> Remove states from the calculation by clicking on of the rectancles.</p>
        ']);
    }

    public function severity()
    {
        $this->loadView("Charts", ['page' => 'severity', 'sourcePathname' => '/charts/getSeverity', 'title' => 'Cases', 'description' => 'Cases']);
    }

    public function timeline()
    {
        $this->loadView("Charts", ['page' => 'timeline', 'sourcePathname' => '/charts/getTimeline', 'title' => 'Cases', 'description' => 'Cases']);
    }

    public function getCases() {
        echo json_encode($this->chartModel->getCasesPerState());
    }

    public function getSeverity() {
        echo json_encode($this->chartModel->getSeverityPerState());
    }

    public function getTimeline() {
        echo json_encode($this->chartModel->getTimelineOfCases());
    }


    public function get() {
        echo json_encode($this->chartModel->getCharts());
    }
}
