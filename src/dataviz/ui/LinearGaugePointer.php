<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class LinearGaugePointer extends SerializableObject {

    /**
     * The border of the pointer.
     * @param \yii2\kendo\dataviz\ui\LinearGaugePointerBorder|array $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointer
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The color of the pointer.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointer
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The margin of the pointer.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointer
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The opacity of the pointer.
Any valid CSS color string will work here, including hex and rgb.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointer
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The shape of the pointer.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointer
     */
    public function shape($value) {
        return $this->setProperty('shape', $value);
    }

    /**
     * The size of the pointer.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointer
     */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
     * The element arround/under the pointer.
(available only for 'barIndicator' shape)
     * @param \yii2\kendo\dataviz\ui\LinearGaugePointerTrack|array $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointer
     */
    public function track($value) {
        return $this->setProperty('track', $value);
    }

    /**
     * The value of the gauge.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointer
     */
    public function value($value) {
        return $this->setProperty('value', $value);
    }

}
