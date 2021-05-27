<?php

class ChartOptionBoundary
{
    /**
     * @var int
     */
    public $min;

    /**
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