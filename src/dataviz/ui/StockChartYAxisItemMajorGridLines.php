<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartYAxisItemMajorGridLines extends SerializableObject {

    /**
     * The color of the lines.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemMajorGridLines
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The visibility of the lines.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemMajorGridLines
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The width of the lines.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemMajorGridLines
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
