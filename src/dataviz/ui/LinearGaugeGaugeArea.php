<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class LinearGaugeGaugeArea extends SerializableObject {

    /**
     * The background of the gauge area.
Any valid CSS color string will work here, including hex and rgb.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeGaugeArea
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the gauge area.
     * @param \yii2\kendo\dataviz\ui\LinearGaugeGaugeAreaBorder|array $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeGaugeArea
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The height of the gauge area.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeGaugeArea
     */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
     * The margin of the gauge area.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeGaugeArea
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The width of the gauge area.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugeGaugeArea
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
