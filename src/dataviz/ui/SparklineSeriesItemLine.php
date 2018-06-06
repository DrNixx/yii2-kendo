<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class SparklineSeriesItemLine extends SerializableObject {

    /**
     * The line color.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemLine
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The line opacity.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemLine
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The line width.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}

