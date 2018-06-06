<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartNavigatorSeriesItemHighlightLine extends SerializableObject {

    /**
     * The width of the line.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemHighlightLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
     * The line color.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemHighlightLine
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The opacity of the line.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemHighlightLine
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

}
