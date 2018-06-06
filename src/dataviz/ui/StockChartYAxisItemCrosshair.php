<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartYAxisItemCrosshair extends SerializableObject {

    /**
     * The color of the crosshair.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemCrosshair
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The width of the crosshair.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemCrosshair
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
     * The opacity of the crosshair.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemCrosshair
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The dash type of the crosshair.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemCrosshair
     */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
     * The dash type of the crosshair.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemCrosshair
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The crosshar tooltip configuration options.
     * @param \kendo\dataviz\ui\StockChartYAxisItemCrosshairTooltip|array $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemCrosshair
     */
    public function tooltip($value) {
        return $this->setProperty('tooltip', $value);
    }

}
