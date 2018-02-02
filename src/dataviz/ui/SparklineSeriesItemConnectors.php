<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class SparklineSeriesItemConnectors extends SerializableObject {

    /**
     * The color of the connector line.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineSeriesItemConnectors
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The padding between the connector line and the label, and connector line and pie chart.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\SparklineSeriesItemConnectors
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * The width of the connector line.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\SparklineSeriesItemConnectors
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
