<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class StockChartSeriesItemTarget extends SerializableObject {

    /**
     * The target line.
     * @param \yii2\kendo\dataviz\ui\StockChartSeriesItemTargetLine|array $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemTarget
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * The target color.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemTarget
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The border of the target.
     * @param \yii2\kendo\dataviz\ui\StockChartSeriesItemTargetBorder|array $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemTarget
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

}
