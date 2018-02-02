<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class StockChartPlotArea extends SerializableObject {

    /**
     * The background color of the plot area.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartPlotArea
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The background opacity of the plot area.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\StockChartPlotArea
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The border of the plot area.
     * @param \yii2\kendo\dataviz\ui\StockChartPlotAreaBorder|array $value
     * @return \yii2\kendo\dataviz\ui\StockChartPlotArea
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The margin of the plot area.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\StockChartPlotArea
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

}
