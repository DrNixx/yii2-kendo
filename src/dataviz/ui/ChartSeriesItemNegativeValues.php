<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class ChartSeriesItemNegativeValues extends SerializableObject {

    /**
     * The color of the negative values.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemNegativeValues
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The visibility of the negative values.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemNegativeValues
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
