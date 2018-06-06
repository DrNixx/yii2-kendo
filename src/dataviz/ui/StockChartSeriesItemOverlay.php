<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartSeriesItemOverlay extends SerializableObject {

    /**
     * The gradient name.Available options:
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemOverlay
     */
    public function gradient($value) {
        return $this->setProperty('gradient', $value);
    }

}
