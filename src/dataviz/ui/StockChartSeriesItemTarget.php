<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartSeriesItemTarget extends SerializableObject {

    /**
     * The target line.
     * @param \kendo\dataviz\ui\StockChartSeriesItemTargetLine|array $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemTarget
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * The target color.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemTarget
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The border of the target.
     * @param \kendo\dataviz\ui\StockChartSeriesItemTargetBorder|array $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemTarget
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

}
