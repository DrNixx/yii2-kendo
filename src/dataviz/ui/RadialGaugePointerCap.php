<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class RadialGaugePointerCap extends SerializableObject {

    /**
     * The color of the cap.
Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\RadialGaugePointerCap
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The size of the cap in percents. (from 0 to 1)
     * @param float $value
     * @return \kendo\dataviz\ui\RadialGaugePointerCap
     */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

}
