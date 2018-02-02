<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class StockChartSeriesItemLine extends SerializableObject {

    /**
     * The line color.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLine
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The line opacity.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLine
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The line width.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
