<?php

class Charts extends Controller
{

    private const PAGE_CASES = 'cases';
    private const PAGE_SEVERITY = 'severity';
    private const PAGE_TIMELINE = 'timeline';

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
        $this->loadView("Charts", [
            'page' => self::PAGE_CASES, 'sourcePathname' => '/charts/getCases', 'title' => 'Number of casses per state',

            'description' => '
            <p> Each slice represents a proportion of tracked data of casses that happened in a certain state. Hover to see have a better look.</p>
            <p> Remove states from the calculation by clicking on of the rectancles.</p>
        '
        ]);
    }

    public function severity()
    {
        $options = $this->chartModel->getStateOptions();
        $options['Overall'] = 'Overall';

        //first is always 'Overall'
        $title = "Severity overall";
        $value = $options['Overall'];
        if(isset($_GET['s']) && in_array($_GET['s'], $options)) {
            $title = "Severity in the state of ".$_GET['s'];
            $value = $_GET['s'];
        }

        $this->loadView("Charts", [
            'page' =>  self::PAGE_SEVERITY, 
            'sourcePathname' => '/charts/getSeverity', 
            'title' => $title, 
            'description' => "
                <p> There are up to 4 units for the severity scale, starting from 1. </p>
                <p> Use the select to choose to see the severity of cases overall or in a specific state you want to focus on. </p>
            ",

            /** select props */
            'selection' => [
                'label' => 'Select state:',
                'value' => $value,
                'options' => $options,
            ]
        ]);
    }

    public function timeline()
    {
        $this->loadView("Charts", ['page' => self::PAGE_TIMELINE, 'sourcePathname' => '/charts/getTimeline', 
        'title' => 'Timeline of cases per year', 
        'description' => "
            <p> Each line corresponds to an year. Hover on a desired month to see the number. Click on below rectangles to toggle the years. </p>
        ",
        ]);
    }

    public function getCases()
    {
        echo json_encode($this->chartModel->getCasesPerState());
    }

    public function getSeverity()
    {
        echo json_encode($this->chartModel->getSeverityPerState());
    }

    public function getTimeline()
    {
        echo json_encode($this->chartModel->getTimelineOfCases());
    }

    
    /** EXPORT SVG FUNCTIONS */
    private function getCasesCsv() {
        $this->chartModel->chartsToCsv($this->chartModel->getCasesPerState());
    }

    public function getSeverityCsv()
    {
        $chartPerState = $this->chartModel->getSeverityPerState();
        
        $value = 'Overall';
        if(
            isset($_GET['s']) && 
            isset($chartPerState[$_GET['s']])
        ) {
            $value = $_GET['s'];
        }

        $this->chartModel->chartsToCsv($chartPerState[$value]);
    }

    public function getTimelineCsv()
    {
        $this->chartModel->chartsToCsv($this->chartModel->getTimelineOfCases());
    }

    /** api */
    public function exportCsv()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : "";
        switch ($page) {
            case self::PAGE_SEVERITY:
                $this->getSeverityCsv();
                break;

            case self::PAGE_TIMELINE:
                $this->getTimelineCsv();
                break;

            default:
                $this->getCasesCsv();
                
        }
    }
}
