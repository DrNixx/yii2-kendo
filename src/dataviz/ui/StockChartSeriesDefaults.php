<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class StockChartSeriesDefaults extends SerializableObject {

    /**
     * The area configuration options.
The default options for all area series. For more details see the series options.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function area($value) {
        return $this->setProperty('area', $value);
    }

    /**
     * The candlestick configuration options.
The default options for all candlestick series. For more details see the series options.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function candlestick($value) {
        return $this->setProperty('candlestick', $value);
    }

    /**
     * The ohlc configuration options.
The default options for all ohlc series. For more details see the series options.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function ohlc($value) {
        return $this->setProperty('ohlc', $value);
    }

    /**
     * The border of the series.
     * @param \yii2\kendo\dataviz\ui\StockChartSeriesDefaultsBorder|array $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The column configuration options.
The default options for all column series. For more details see the series options.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function column($value) {
        return $this->setProperty('column', $value);
    }

    /**
     * The distance between category clusters.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function gap($value) {
        return $this->setProperty('gap', $value);
    }

    /**
     * Configures the series data labels.
     * @param \yii2\kendo\dataviz\ui\StockChartSeriesDefaultsLabels|array $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function labels($value) {
        return $this->setProperty('labels', $value);
    }

    /**
     * The line configuration options.
The default options for all line series. For more details see the series options.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * The effects overlay.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function overlay($value) {
        return $this->setProperty('overlay', $value);
    }

    /**
     * The pie configuration options.
The default options for all pie series. For more details see the series options.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function pie($value) {
        return $this->setProperty('pie', $value);
    }

    /**
     * Space between bars.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function spacing($value) {
        return $this->setProperty('spacing', $value);
    }

    /**
     * A value indicating if the series should be stacked.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function stack($value) {
        return $this->setProperty('stack', $value);
    }

    /**
     * The data point tooltip configuration options.
     * @param \yii2\kendo\dataviz\ui\StockChartSeriesDefaultsTooltip|array $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesDefaults
     */
    public function tooltip($value) {
        return $this->setProperty('tooltip', $value);
    }

}
