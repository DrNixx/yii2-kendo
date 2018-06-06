<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartSeriesItemOverlay extends SerializableObject {

    /**
     * The gradient name.Available options:
     * @param string $value
     * @return \kendo\dataviz\ui\ChartSeriesItemOverlay
     */
    public function gradient($value) {
        return $this->setProperty('gradient', $value);
    }

}
