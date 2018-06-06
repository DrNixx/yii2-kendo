<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartSeriesItemHighlightLine extends SerializableObject {

    /**
     * The width of the line.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemHighlightLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
     * The line color.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemHighlightLine
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The opacity of the line.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemHighlightLine
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

}
