<?php

require_once __DIR__."/ChartDataEntity.php";
require_once __DIR__."/ChartOptionsEntity.php";

/**
 * Class ChartEntity
 *
 * @OA\Schema(schema="ChartEntity")
 */
class ChartEntity
{
    public static $CHART_TYPE_PIE = "pie";
    public static $CHART_TYPE_DOUGHNUT = "doughnut";
    public static $CHART_TYPE_LINE = "line";

    /**
     * @OA\Property(
     *     default="pie",
     *     title="chart type",
     *     description="The manner in which the chart is drawn",
     *     enum={"pie", "doughnut", "line"}
     * )
     * @var string - pie|doughnut|line
     */
    public $type;

    /**
     * @OA\Property(
     *     description="ChartDataEntity",
     *     title="ChartDataEntity",
     *     ref="#/components/schemas/ChartDataEntity"
     * )
     * @var ChartDataEntity
     */
    public $data;

    /**
     * @OA\Property(
     *     description="ChartOptionsEntity",
     *     title="ChartOptionsEntity",
     *     ref="#/components/schemas/ChartOptionsEntity"
     * )
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