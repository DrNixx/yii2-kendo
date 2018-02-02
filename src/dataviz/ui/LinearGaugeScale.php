<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class LinearGaugeScale extends SerializableObject {

    /**
     * Configures the axis line.
     * @param \yii2\kendo\dataviz\ui\LinearGaugeScaleLine|array $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * Configures the scale labels.
     * @param \yii2\kendo\dataviz\ui\LinearGaugeScaleLabels|array $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function labels($value) {
        return $this->setProperty('labels', $value);
    }

    /**
     * Configures the scale major ticks.
     * @param \yii2\kendo\dataviz\ui\LinearGaugeScaleMajorTicks|array $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function majorTicks($value) {
        return $this->setProperty('majorTicks', $value);
    }

    /**
     * The interval between major divisions.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function majorUnit($value) {
        return $this->setProperty('majorUnit', $value);
    }

    /**
     * The maximum value of the scale.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function max($value) {
        return $this->setProperty('max', $value);
    }

    /**
     * The minimum value of the scale.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function min($value) {
        return $this->setProperty('min', $value);
    }

    /**
     * Configures the scale minor ticks.
     * @param \yii2\kendo\dataviz\ui\LinearGaugeScaleMinorTicks|array $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function minorTicks($value) {
        return $this->setProperty('minorTicks', $value);
    }

    /**
     * The interval between minor divisions.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function minorUnit($value) {
        return $this->setProperty('minorUnit', $value);
    }

    /**
     * Mirrors the scale labels and ticks.
If the labels are normally on the left side of the scale, mirroring the scale will render them to the right.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function mirror($value) {
        return $this->setProperty('mirror', $value);
    }

    /**
     * Adds LinearGaugeScaleRange to the LinearGaugeScale.
     * @param \yii2\kendo\dataviz\ui\LinearGaugeScaleRange|array,... $value one or more LinearGaugeScaleRange to add.
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function addRange($value) {
        return $this->add('ranges', func_get_args());
    }

    /**
     * The default color for the ranges.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function rangePlaceholderColor($value) {
        return $this->setProperty('rangePlaceholderColor', $value);
    }

    /**
     * Reverses the axis direction - values increase from right to left and from top to bottom.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function reverse($value) {
        return $this->setProperty('reverse', $value);
    }

    /**
     * The position of the gauge.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScale
     */
    public function vertical($value) {
        return $this->setProperty('vertical', $value);
    }

}
