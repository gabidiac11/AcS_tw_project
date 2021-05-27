<?php

require_once __DIR__."/ChartDataEntity.php";
require_once __DIR__."/ChartOptionsEntity.php";

class ChartEntity
{
    public static $CHART_TYPE_PIE = "pie";
    public static $CHART_TYPE_DOUGHNUT = "doughnut";
    public static $CHART_TYPE_LINE = "line";

    /**
     * @var string - pie|doughnut|line
     */
    public $type;

    /**
     * @var ChartDataEntity
     */
    public $data;

    /**
     * @var ChartOptionsEntity
     */
    public $options;

    /**
     * ChartEntity constructor.
     * @param string $type
     * @param ChartDataEntity $data
     * @param ChartOptionsEntity $options
     */
    public function __construct(string $type, ChartDataEntity $data, ChartOptionsEntity $options)
    {
        $this->type = $type;
        $this->data = $data;
        $this->options = $options;
    }


}