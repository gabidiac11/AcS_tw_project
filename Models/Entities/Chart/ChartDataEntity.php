<?php

require_once __DIR__."./ChartDatasetEntity.php";

class ChartDataEntity
{
    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var ChartDatasetEntity[]
     */
    public $datasets;

    /**
     * ChartDataEntity constructor.
     * @param string[] $labels
     * @param ChartDatasetEntity[] $datasets
     */
    public function __construct(array $labels, array $datasets)
    {
        $this->labels = $labels;
        $this->datasets = $datasets;
    }


}