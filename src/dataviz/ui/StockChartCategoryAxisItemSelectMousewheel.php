<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartCategoryAxisItemSelectMousewheel extends SerializableObject {

    /**
     * Reverses the mousewheel zoom direction.
Normal direction is down for "zoom out", up for "zoom in".
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartCategoryAxisItemSelectMousewheel
     */
    public function reverse($value) {
        return $this->setProperty('reverse', $value);
    }

    /**
     * The zoom direction. Possible values:
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartCategoryAxisItemSelectMousewheel
     */
    public function zoom($value) {
        return $this->setProperty('zoom', $value);
    }

}
