<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class RadialGaugeScale extends SerializableObject {

    /**
     * The end angle of the gauge.
The gauge is rendered clockwise(0 degrees are the 180 degrees in the polar coordinat system)
     * @param float $value
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function endAngle($value) {
        return $this->setProperty('endAngle', $value);
    }

    /**
     * Configures the scale labels.
     * @param \kendo\dataviz\ui\RadialGaugeScaleLabels|array $value
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function labels($value) {
        return $this->setProperty('labels', $value);
    }

    /**
     * Configures the scale major ticks.
     * @param \kendo\dataviz\ui\RadialGaugeScaleMajorTicks|array $value
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function majorTicks($value) {
        return $this->setProperty('majorTicks', $value);
    }

    /**
     * The interval between major divisions.
     * @param float $value
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function majorUnit($value) {
        return $this->setProperty('majorUnit', $value);
    }

    /**
     * The maximum value of the scale.
     * @param float $value
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function max($value) {
        return $this->setProperty('max', $value);
    }

    /**
     * The minimum value of the scale.
     * @param float $value
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function min($value) {
        return $this->setProperty('min', $value);
    }

    /**
     * Configures the scale minor ticks.
     * @param \kendo\dataviz\ui\RadialGaugeScaleMinorTicks|array $value
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function minorTicks($value) {
        return $this->setProperty('minorTicks', $value);
    }

    /**
     * The interval between minor divisions.
     * @param float $value
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function minorUnit($value) {
        return $this->setProperty('minorUnit', $value);
    }

    /**
     * Adds RadialGaugeScaleRange to the RadialGaugeScale.
     * @param \kendo\dataviz\ui\RadialGaugeScaleRange|array,... $value one or more RadialGaugeScaleRange to add.
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function addRange($value) {
        return $this->add('ranges', func_get_args());
    }

    /**
     * The default color for the ranges.
     * @param string $value
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function rangePlaceholderColor($value) {
        return $this->setProperty('rangePlaceholderColor', $value);
    }

    /**
     * Reverses the scale direction - values are increase anticlockwise.
     * @param boolean $value
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function reverse($value) {
        return $this->setProperty('reverse', $value);
    }

    /**
     * The start angle of the gauge.
The gauge is rendered clockwise(0 degrees are the 180 degrees in the polar coordinat system)
     * @param float $value
     * @return \kendo\dataviz\ui\RadialGaugeScale
     */
    public function startAngle($value) {
        return $this->setProperty('startAngle', $value);
    }

}

