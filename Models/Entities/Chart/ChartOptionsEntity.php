<?php

require_once __DIR__ . "/ChartOptionScalesEntity.php";

/**
 * Class ChartOptionsEntity
 *
 * @OA\Schema(schema="ChartOptionsEntity")
 */
class ChartOptionsEntity
{
    /**
     * @var ChartOptionScalesEntity|null
     */
    public $scales;

    /**
     * @OA\Property(
     *     description="ChartOptionScalesEntity (nullable)",
     *     title="ChartOptionScalesEntity",
     *     ref="#/components/schemas/ChartOptionScalesEntity"
     * )
     * ChartOptionsEntity constructor.
     * @param ChartOptionScalesEntity|null $scales
     */
    public function __construct(?ChartOptionScalesEntity $scales)
    {
        $this->scales = $scales;
    }
}