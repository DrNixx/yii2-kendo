<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class LinearGaugeScaleMajorTicks extends SerializableObject {

    /**
     * The color of the major ticks.
Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\LinearGaugeScaleMajorTicks
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The major tick size.
This is the length of the line in pixels that is drawn to indicate the tick on the scale.
     * @param float $value
     * @return \kendo\dataviz\ui\LinearGaugeScaleMajorTicks
     */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
     * The visibility of the major ticks.
     * @param boolean $value
     * @return \kendo\dataviz\ui\LinearGaugeScaleMajorTicks
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The width of the major ticks.
     * @param float $value
     * @return \kendo\dataviz\ui\LinearGaugeScaleMajorTicks
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
