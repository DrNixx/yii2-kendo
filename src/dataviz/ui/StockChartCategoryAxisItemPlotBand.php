<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartCategoryAxisItemPlotBand extends SerializableObject {

    /**
     * The start position of the plot band in axis units.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartCategoryAxisItemPlotBand
     */
    public function from($value) {
        return $this->setProperty('from', $value);
    }

    /**
     * The end position of the plot band in axis units.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartCategoryAxisItemPlotBand
     */
    public function to($value) {
        return $this->setProperty('to', $value);
    }

    /**
     * The color of the plot band.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartCategoryAxisItemPlotBand
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The opacity of the plot band.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartCategoryAxisItemPlotBand
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

}
