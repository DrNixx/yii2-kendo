<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartNavigatorSeriesItemOverlay extends SerializableObject {

    /**
     * The gradient name.Available options:
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemOverlay
     */
    public function gradient($value) {
        return $this->setProperty('gradient', $value);
    }

}
