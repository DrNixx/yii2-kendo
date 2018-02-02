<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class StockChartSeriesItemMarkers extends SerializableObject {

    /**
     * The background color of the current series markers.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemMarkers
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the markers.
     * @param \yii2\kendo\dataviz\ui\StockChartSeriesItemMarkersBorder|array $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemMarkers
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The marker size.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemMarkers
     */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
     * Configures the markers shape type.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemMarkers
     */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

    /**
     * The markers visibility.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemMarkers
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
