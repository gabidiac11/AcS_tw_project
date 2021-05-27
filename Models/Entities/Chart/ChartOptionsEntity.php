<?php

require_once __DIR__ . "/ChartOptionScalesEntity.php";

class ChartOptionsEntity
{
    /**
     * @var ChartOptionScalesEntity|null
     */
    public $scales;

    /**
     * ChartOptionsEntity constructor.
     * @param ChartOptionScalesEntity|null $scales
     */
    public function __construct(?ChartOptionScalesEntity $scales)
    {
        $this->scales = $scales;
    }
}