<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class StockChartCategoryAxisItemMinorGridLines extends SerializableObject {

    /**
     * The color of the lines. Any valid CSS color string will work here, including hex and
rgb.Note that this setting has no effect if the visibility of the minor
grid lines is not set to true.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartCategoryAxisItemMinorGridLines
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The dash type of the grid lines.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartCategoryAxisItemMinorGridLines
     */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
     * The visibility of the lines.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\StockChartCategoryAxisItemMinorGridLines
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The width of the lines.Note that this setting has no effect if the visibility of the minor
grid lines is not set to true.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\StockChartCategoryAxisItemMinorGridLines
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
