<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class SparklineSeriesItemTargetLine extends SerializableObject {

    /**
     * The width of the line.
     * @param  $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemTargetLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
