<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class SparklineValueAxisItemMinorGridLines extends SerializableObject {

    /**
     * The color of the lines.Note that this has no effect if the visibility of the minor grid lines is not set to true.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineValueAxisItemMinorGridLines
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The dash type of the minor grid lines.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineValueAxisItemMinorGridLines
     */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
     * The visibility of the lines.
     * @param boolean $value
     * @return \kendo\dataviz\ui\SparklineValueAxisItemMinorGridLines
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The width of the lines.Note that this settings has no effect if the visibility of the minor grid lines is not set to true.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineValueAxisItemMinorGridLines
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
