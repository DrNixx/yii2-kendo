<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartSeriesItemTargetLine extends SerializableObject {

    /**
     * The width of the line.
     * @param  $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemTargetLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
