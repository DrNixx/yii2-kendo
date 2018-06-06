<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class RadialGaugePointer extends SerializableObject {

    /**
     * The cap configuration options.
     * @param \kendo\dataviz\ui\RadialGaugePointerCap|array $value
     * @return \kendo\dataviz\ui\RadialGaugePointer
     */
    public function cap($value) {
        return $this->setProperty('cap', $value);
    }

    /**
     * The color of the pointer.
Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\RadialGaugePointer
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The value of the gauge.
     * @param float $value
     * @return \kendo\dataviz\ui\RadialGaugePointer
     */
    public function value($value) {
        return $this->setProperty('value', $value);
    }

}
