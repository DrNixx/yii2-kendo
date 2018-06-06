<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartValueAxisItemLine extends SerializableObject {

    /**
     * The color of the line. This will also effect the major and minor ticks, but
not the grid lines.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartValueAxisItemLine
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The dash type of the line.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartValueAxisItemLine
     */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
     * The visibility of the line.
     * @param boolean $value
     * @return \kendo\dataviz\ui\ChartValueAxisItemLine
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The width of the line. This will also effect the major and minor ticks, but
not the grid lines.
     * @param float $value
     * @return \kendo\dataviz\ui\ChartValueAxisItemLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
