<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class ChartSeriesItemConnectors extends SerializableObject {

    /**
     * The color of the connector line.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemConnectors
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The padding between the connector line and the label, and connector line and donut chart.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemConnectors
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * The width of the connector line.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemConnectors
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
