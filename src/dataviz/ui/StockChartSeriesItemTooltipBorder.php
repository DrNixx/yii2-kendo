<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartSeriesItemTooltipBorder extends SerializableObject {

    /**
     * The color of the border.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemTooltipBorder
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The width of the border.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemTooltipBorder
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
