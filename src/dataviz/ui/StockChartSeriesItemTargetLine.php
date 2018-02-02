<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class StockChartSeriesItemTargetLine extends SerializableObject {

    /**
     * The width of the line.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemTargetLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
