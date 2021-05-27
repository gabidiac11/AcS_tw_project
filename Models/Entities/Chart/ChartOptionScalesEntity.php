<?php

require_once __DIR__."/ChartOptionBoundary.php";

class ChartOptionScalesEntity
{
    /**
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