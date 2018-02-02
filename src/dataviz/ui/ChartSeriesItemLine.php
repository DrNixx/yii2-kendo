<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class ChartSeriesItemLine extends SerializableObject {

    /**
     * The line color.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemLine
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The line opacity.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemLine
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The line width.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
