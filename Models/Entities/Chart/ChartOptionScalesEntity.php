<?php

require_once __DIR__."/ChartOptionBoundary.php";

/**
 * Class ChartOptionScalesEntity
 *
 * @OA\Schema(schema="ChartOptionScalesEntity", description="Left side ruller (optional)")
 */
class ChartOptionScalesEntity
{
    /**
     * @OA\Property(
     *     description="Accident ChartOptionBoundary",
     *     title="ChartOptionBoundary",
     *     ref="#/components/schemas/ChartOptionBoundary"
     * )
     * @var ChartOptionBoundary
     */
    public $y;

    /**
     * ChartOptionScalesEntity constructor.
     * @param ChartOptionBoundary $y
     */
    public function __construct(ChartOptionBoundary $y)
    {
        $this->y = $y;
    }
}