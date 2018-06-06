<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartLegend extends SerializableObject {

    /**
     * The background color of the legend. Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartLegend
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the legend.
     * @param \kendo\dataviz\ui\StockChartLegendBorder|array $value
     * @return \kendo\dataviz\ui\StockChartLegend
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * Configures the legend labels.
     * @param \kendo\dataviz\ui\StockChartLegendLabels|array $value
     * @return \kendo\dataviz\ui\StockChartLegend
     */
    public function labels($value) {
        return $this->setProperty('labels', $value);
    }

    /**
     * The margin of the legend.
     * @param float| $value
     * @return \kendo\dataviz\ui\StockChartLegend
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The X offset from its position.  The offset is relative to the current position of the legend.
For instance, a value of 20 will move the legend 20 pixels to the right of it's initial position.  A negative value will move the legend
to the left of the current position.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartLegend
     */
    public function offsetX($value) {
        return $this->setProperty('offsetX', $value);
    }

    /**
     * The Y offset from its position.  The offset is relative to the current position of the legend.
For instance, a value of 20 will move the legend 20 pixels down from it's initial position.  A negative value will move the legend
upwards from the current position.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartLegend
     */
    public function offsetY($value) {
        return $this->setProperty('offsetY', $value);
    }

    /**
     * The padding of the legend.
     * @param float| $value
     * @return \kendo\dataviz\ui\StockChartLegend
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * The positions of the legend.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartLegend
     */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
     * The visibility of the legend.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartLegend
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
