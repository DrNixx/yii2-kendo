<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartNavigatorSeriesItemHighlightBorder extends SerializableObject {

    /**
     * The width of the border.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemHighlightBorder
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
     * The border color.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemHighlightBorder
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The border opacity.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemHighlightBorder
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

}
