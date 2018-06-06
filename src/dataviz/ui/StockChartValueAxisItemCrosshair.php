<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartValueAxisItemCrosshair extends SerializableObject {

    /**
     * The color of the crosshair.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItemCrosshair
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The width of the crosshair.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItemCrosshair
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
     * The opacity of the crosshair.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItemCrosshair
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The dash type of the crosshair.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItemCrosshair
     */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
     * The dash type of the crosshair.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItemCrosshair
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The crosshar tooltip configuration options.
     * @param \kendo\dataviz\ui\StockChartValueAxisItemCrosshairTooltip|array $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItemCrosshair
     */
    public function tooltip($value) {
        return $this->setProperty('tooltip', $value);
    }

}
