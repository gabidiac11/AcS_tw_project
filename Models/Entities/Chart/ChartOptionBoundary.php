<?php

/**
 * Class ChartOptionBoundary
 *
 * @OA\Schema(schema="ChartOptionBoundary")
 */
class ChartOptionBoundary
{
    /**
     * @OA\Property(
     *     description="min",
     *     title="min",
     *     format="int"
     * )
     * @var int
     */
    public $min;

    /**
     * @OA\Property(
     *     description="max",
     *     title="max",
     *     format="int"
     * )
     * @var int
     */
    public $max;

    /**
     * ChartOptionBoundary constructor.
     * @param int $min
     * @param int $max
     */
    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}