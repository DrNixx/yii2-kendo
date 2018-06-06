<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartSeriesItemHighlight extends SerializableObject {

    /**
     * A value indicating if the series points should be highlighted.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemHighlight
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The border of highlighted points. The color is computed automatically from the base point color.** Applicable to bubble, pie, candlestick and ohlc series. **
     * @param \kendo\dataviz\ui\StockChartSeriesItemHighlightBorder|array $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemHighlight
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The highlight color.** Available only for pie series **
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemHighlight
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * Line options for highlighted points. The color is computed automatically from the base point color.** Available only for candlestick series **
     * @param \kendo\dataviz\ui\StockChartSeriesItemHighlightLine|array $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemHighlight
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * The opacity of the highlighted points.** Applicable to bubble, pie, candlestick and ohlc series. **
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartSeriesItemHighlight
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

}
