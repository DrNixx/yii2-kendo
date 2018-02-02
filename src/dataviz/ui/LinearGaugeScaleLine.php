<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class LinearGaugeScaleLine extends SerializableObject {

    /**
     * The color of the lines. Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScaleLine
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The dash type of the line.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScaleLine
     */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
     * The visibility of the lines.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScaleLine
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The width of the line..
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeScaleLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
