<?php
namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartYAxisItemCrosshairTooltipBorder extends SerializableObject
{
    /**
     * The color of the border.
     * @param string $value
     * @return $this
     */
    public function color($value)
    {
        return $this->setProperty('color', $value);
    }

    /**
     * The width of the border.
     * @param float $value
     * @return $this
     */
    public function width($value)
    {
        return $this->setProperty('width', $value);
    }
}
