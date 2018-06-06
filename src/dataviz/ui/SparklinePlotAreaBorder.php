<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class SparklinePlotAreaBorder extends SerializableObject {

    /**
     * The color of the border.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklinePlotAreaBorder
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The dash type of the border.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklinePlotAreaBorder
     */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
     * The width of the border.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklinePlotAreaBorder
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
