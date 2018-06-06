<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class SparklineValueAxisItemMajorGridLines extends SerializableObject {

    /**
     * The color of the lines.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineValueAxisItemMajorGridLines
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The visibility of the lines.
     * @param boolean $value
     * @return \kendo\dataviz\ui\SparklineValueAxisItemMajorGridLines
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The width of the lines.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineValueAxisItemMajorGridLines
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
