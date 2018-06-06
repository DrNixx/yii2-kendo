<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class SparklineSeriesItemOverlay extends SerializableObject {

    /**
     * The gradient name.Available options:
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemOverlay
     */
    public function gradient($value) {
        return $this->setProperty('gradient', $value);
    }

}
