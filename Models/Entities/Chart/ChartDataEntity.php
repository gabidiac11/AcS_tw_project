<?php

require_once __DIR__ . "/ChartDatasetEntity.php";

/**
 * Class ChartDataEntity
 *
 * @OA\Schema(schema="ChartDataEntity")
 */
class ChartDataEntity
{
    /**
     * @OA\Property(
     *     description="labels",
     *     title="labels", type="array", @OA\Items(type="string")
     * )
     * @var string[]
     */
    public $labels;

    /**
     * @OA\Property(
     *     description="labels",
     *     title="labels", 
     *      type="array", 
     *      @OA\Items(ref="#/components/schemas/ChartDatasetEntity")
     * )
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
