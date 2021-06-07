<?php

require_once __DIR__."/Entities/Chart/ChartEntity.php";
require_once __DIR__ . "/helper/ModelConstants.php";

/**
 * view helpers: generates data for the map page, this may consist of page heading, or other data that indicates what ui to server-side rendered (the state selectors and other labels)
 * GET endpoints for each chart type
 */
class ChartModel extends Model
{
    

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * gets chart entities grouped by state, that contains number of cases for each severity value 
     * +
     * get the same results, but overall (not grouped by state)
     */
    public function getSeverityPerState() {
        $perState = $this->db->select(
        "SELECT 
            State as label,
            SUM(case when Severity = '1' then 1 else 0 end) AS serverity1,
            SUM(case when Severity = '2' then 1 else 0 end) AS serverity2,
            SUM(case when Severity = '3' then 1 else 0 end) AS serverity3,
            SUM(case when Severity = '4' then 1 else 0 end) AS serverity4
        FROM accidents GROUP BY State");

        /** compute overall data */
        $overAll = [
            'label' => 'Overall',
            'serverity1' => 0,
            'serverity2' => 0,
            'serverity3' => 0,
            'serverity4' => 0
        ];
        foreach($perState as $row) {
            $overAll['serverity1'] += $row['serverity1'];
            $overAll['serverity2'] += $row['serverity2'];
            $overAll['serverity3'] += $row['serverity3'];
            $overAll['serverity4'] += $row['serverity4'];
        }

        $items = $perState;
        $items[] = $overAll;

        /**
         * @var ChartEntity[]
         */
        $charts = [];

        $backgroundColor = ['rgba(162, 2, 2, 0.5)', 'rgba(255, 45, 2, 0.5)', 'rgba(255, 95, 3, 0.5)', 'rgba(255, 242, 3, 0.66)'];
        $borderColor = ['rgba(162, 2, 2, 0.6)', 'rgba(255, 45, 2, 0.6)', 'rgba(255, 95, 3, 0.6)', 'rgba(255, 242, 3, 0.7)'];

        foreach ($items as $item) {
            $key = isset(ModelConstants::$SMAP[$item['label']]) ? ModelConstants::$SMAP[$item['label']] : $item['label'];

            $charts[$key] = new ChartEntity(
                ChartEntity::$CHART_TYPE_PIE,
                //data
                new ChartDataEntity(
                    ["Severity 1","Severity 2","Severity 3","Severity 4"], //labels
                    //datasets
                    [new ChartDatasetEntity(
                        "Severity",
                        [
                            intval($item['serverity1']),
                            intval($item['serverity2']),
                            intval($item['serverity3']),
                            intval($item['serverity4'])
                        ],
                        $backgroundColor,
                        $borderColor,
                        1)
                    ]
                ),
                //options
                new ChartOptionsEntity(null)
            );
        }

        return $charts;
    } 

    private function generateColors($count) {
        $colors = [];
        for($i = 0; $i < $count; $i++) {
            $colors[] = [rand(0, 255), rand(0, 255), rand(0, 255)];
        }

        return [
            'backgroundColor' => array_map(function($item) {
                return "rgba(".$item[0].",".$item[1].", ".$item[2].", 0.4)";
            }, $colors),
            'borderColor' => array_map(function($item) {
                return "rgba(".$item[0].",".$item[1].", ".$item[2].", 1)";
            }, $colors)
        ];
    }

    public function getCasesPerState() {
        $items = $this->db->select(
            "SELECT 
                State as label,
                COUNT(*) as value
            FROM accidents GROUP BY State"
        );

        $colorSample = $this->generateColors(49);

        $backgroundColor = ModelConstants::$LARGE_SET_COLORS;
        $borderColor = ModelConstants::$LARGE_BORDER_COLORS;

        $_SMAP = ModelConstants::$SMAP;

        /** map state short name to the full name */
        return new ChartEntity(
            ChartEntity::$CHART_TYPE_DOUGHNUT,
            //data
            new ChartDataEntity(
                array_map(function($item) use($_SMAP){

                    if(isset($_SMAP[$item['label']])) {
                        return $_SMAP[$item['label']];
                    }
                    return $item['label'];}, $items), //labels
                //datasets
                [new ChartDatasetEntity(
                    "# of cases",
                    array_map(function($item) {return intval($item['value']);}, $items),
                    $backgroundColor,
                    $borderColor,
                    1)
                ]
            ),
            //options
            new ChartOptionsEntity(null)
        );
    } 

    /**
     * a overview of accident frequency per month of each year side by side for comparing
     * 
     * gets chart data of 'LINE' type (this shows a line going up and down based on the progression of data) 
     *  
     * a line for each respective ear 
     * this will results in a progression line with indicators for each month of targeted year 
     * 
    */
    public function getTimelineOfCases() {
       $results = $this->db->select(
        "SELECT 
		    YEAR(Start_Time) as year,
			MONTH (Start_Time) as monthIndex,
            COUNT(*) as value
            
        FROM accidents GROUP by MONTH (Start_Time), YEAR(Start_Time)
        
        ORDER BY YEAR(Start_Time), MONTH (Start_Time)");


       /** @var $items - results key-ed by year */
       $items = [];
       $currentYear = "";
       for ($i = 0; $i < count($results); $i++) {
           $year = $results[$i]['year'];

           if($currentYear != $year) {
               $currentYear = $year;
               
               $items[$year] = [0,0,0,0,0,0,0,0,0,0,0,0];

               for($ii = $i; $ii < count($results); $ii++) {
                   $resultItem = $results[$ii];

                   $monthIndex = intval($resultItem['monthIndex']) - 1;

                   if($resultItem['year'] === $year && isset($items[$year][$monthIndex])) {
                       $items[$year][$monthIndex] = intval($resultItem['value']);
                   }
               }
           }
       }

        $backgroundColor = ModelConstants::$COLORS;
        $borderColor = ModelConstants::$BORDER_COLORS;

        $datasets = [];
        foreach ($items as $year => $values) {
            $datasets[] = new ChartDatasetEntity(
                $year,
                $values,
                $backgroundColor,
                $borderColor,
                1)
            ;
        }

        return new ChartEntity(
            ChartEntity::$CHART_TYPE_LINE,
            //data
            new ChartDataEntity(
                //labels - months
                ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                //datasets
                $datasets
            ),
            //options
            new ChartOptionsEntity(null)
        );

    }

    private function listToCsv($list) {
        $filename = __DIR__."/".uniqid(time())."-chart-file.csv";
        $fp = fopen($filename, 'w');

        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }
        fclose($fp);

        //Check the file exists or not
        if(file_exists($filename)) {

            //Define header information
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header("Cache-Control: no-cache, must-revalidate");
            header("Expires: 0");
            header('Content-Disposition: attachment; filename="'.basename($filename).'"');
            header('Content-Length: ' . filesize($filename));
            header('Pragma: public');

            //Clear system output buffer
            flush();

            //Read the size of the file
            readfile($filename);

            unlink($filename);
        }
    }

    /**
     * @param ChartEntity $chart
     */
    public function chartsToCsv(ChartEntity $chart) {
            $list = [
                array_merge(['Value'], $chart->data->labels)
            ];
    
            foreach($chart->data->datasets as $dataset) {
                $list[] = array_merge([$dataset->label],  $dataset->data);
            }

            $this->listToCsv($list);
    }

    function getCharts() {
        return [
            'severityPerState' => $this->getSeverityPerState(),
            'casesPerState' => $this->getCasesPerState(),
            'timelineOfCases' => $this->getTimelineOfCases()
        ];
    }

    function getStateOptions() {
        return array_map(function($item) {return $item;}, ModelConstants::$SMAP);
    }
}