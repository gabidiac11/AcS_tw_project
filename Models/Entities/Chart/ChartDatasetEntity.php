<?php

class ChartDatasetEntity
{

    /**
     * @var string
     */
    public $label;

    /**
     * @var string[]
     */
    public $data;

    /**
     * @var string[]
     */
    public $backgroundColor;

    /**
     * @var string[]
     */
    public $borderColor;
    
    /**
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