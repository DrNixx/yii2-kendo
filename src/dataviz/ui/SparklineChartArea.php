<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class SparklineChartArea extends SerializableObject {

    /**
     * The background color of the chart area.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineChartArea
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The background opacity of the chart area.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineChartArea
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The border of the chart area.
     * @param \kendo\dataviz\ui\SparklineChartAreaBorder|array $value
     * @return \kendo\dataviz\ui\SparklineChartArea
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The height of the chart area.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineChartArea
     */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
     * The margin of the chart area.
     * @param float| $value
     * @return \kendo\dataviz\ui\SparklineChartArea
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The width of the chart area.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineChartArea
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
