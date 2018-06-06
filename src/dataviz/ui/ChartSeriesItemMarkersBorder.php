<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartSeriesItemMarkersBorder extends SerializableObject {

    /**
     * The color of the border.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartSeriesItemMarkersBorder
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The width of the border.
     * @param float $value
     * @return \kendo\dataviz\ui\ChartSeriesItemMarkersBorder
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
