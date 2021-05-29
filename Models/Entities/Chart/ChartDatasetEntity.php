<?php

/**
 * Class ChartDatasetEntity
 *
 * @OA\Schema(schema="ChartDatasetEntity", description="Each label and list of numbers - 'data' - matches the parent properties, labels and data, with respect to length and meaning)"
 * )
 */
class ChartDatasetEntity
{

    /**
     * @OA\Property(
     *     description="label",
     *     title="label"
     * )
     * @var string
     */
    public $label;

    /**
     * @OA\Property(
     *     description="A set of numbers",
     *     title="data",
     *     type="array", 
     *     @OA\Items(type="int")
     * )
     * @var int[]
     */
    public $data;

    /**
     * @OA\Property(
     *     description="A list of colors (hex or standard - white, black, etc). Defines the pallet of color that will be used in constructing the chart (FILLING). Any number of items bigger than 0 can be used.",
     *     title="backgroundColor",
     *     type="array", 
     *     @OA\Items(type="string")
     * )
     * @var string[]
     */
    public $backgroundColor;

    /**
     * @OA\Property(
     *     description="A list of colors (hex or standard - white, black, etc). Defines the pallet of color that will be used in constructing the chart (BORDERS). Any number of items bigger than 0 can be used.",
     *     title="borderColor",
     *     type="array", 
     *     @OA\Items(type="string")
     * )
     * @var string[]
     */
    public $borderColor;
    
    /**
     * @OA\Property(
     *     description="borderWidth",
     *     title="borderWidth",
     *     format="int"
     * )
     * @var int
     */
    public $borderWidth;

    /**
     * ChartDatasetEntity constructor.
     * @param string $label
     * @param string[] $data
     * @param string[] $backgroundColor
     * @param string[] $borderColor
     * @param int $borderWidth
     */
    public function __construct(string $label, array $data, array $backgroundColor, array $borderColor, int $borderWidth)
    {
        $this->label = $label;
        $this->data = $data;
        $this->backgroundColor = $backgroundColor;
        $this->borderColor = $borderColor;
        $this->borderWidth = $borderWidth;
    }
}