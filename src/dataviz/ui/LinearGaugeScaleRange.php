<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class LinearGaugeScaleRange extends SerializableObject {

    /**
     * The start position of the range in scale units.
     * @param float $value
     * @return \kendo\dataviz\ui\LinearGaugeScaleRange
     */
    public function from($value) {
        return $this->setProperty('from', $value);
    }

    /**
     * The end position of the range in scale units.
     * @param float $value
     * @return \kendo\dataviz\ui\LinearGaugeScaleRange
     */
    public function to($value) {
        return $this->setProperty('to', $value);
    }

    /**
     * The opacity of the range.
     * @param float $value
     * @return \kendo\dataviz\ui\LinearGaugeScaleRange
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The color of the range.
Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\LinearGaugeScaleRange
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

}
