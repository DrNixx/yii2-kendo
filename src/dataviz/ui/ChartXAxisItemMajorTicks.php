<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartXAxisItemMajorTicks extends SerializableObject {

    /**
     * The axis major tick size. This is the length of the line in pixels that is drawn to indicate the tick on the chart.
     * @param float $value
     * @return \kendo\dataviz\ui\ChartXAxisItemMajorTicks
     */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
     * The visibility of the major ticks.
     * @param boolean $value
     * @return \kendo\dataviz\ui\ChartXAxisItemMajorTicks
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
