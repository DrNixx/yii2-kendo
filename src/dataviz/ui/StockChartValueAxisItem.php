<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartValueAxisItem extends SerializableObject {

    /**
     * Value at which the category axis crosses this axis. (Only for object)Value indicies at which the category axes cross the value axis. (Only for array)Date at which the category axis crosses this axis. (Only for date)
     * @param |date|array $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function axisCrossingValue($value) {
        return $this->setProperty('axisCrossingValue', $value);
    }

    /**
     * Color to apply to all axis elements.
Individual color settings for line and labels take priority. Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * Configures the axis labels.
     * @param \kendo\dataviz\ui\StockChartValueAxisItemLabels|array $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function labels($value) {
        return $this->setProperty('labels', $value);
    }

    /**
     * Configures the axis line. This will also affect the major and minor ticks, but not the grid lines.
     * @param \kendo\dataviz\ui\StockChartValueAxisItemLine|array $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * Configures the major grid lines. These are the lines that are an extension of the major ticks through the
body of the chart.
     * @param \kendo\dataviz\ui\StockChartValueAxisItemMajorGridLines|array $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function majorGridLines($value) {
        return $this->setProperty('majorGridLines', $value);
    }

    /**
     * The major ticks of the axis.
     * @param \kendo\dataviz\ui\StockChartValueAxisItemMajorTicks|array $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function majorTicks($value) {
        return $this->setProperty('majorTicks', $value);
    }

    /**
     * The interval between major divisions.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function majorUnit($value) {
        return $this->setProperty('majorUnit', $value);
    }

    /**
     * The maximum value of the axis.
This is often used in combination with the min configuration option.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function max($value) {
        return $this->setProperty('max', $value);
    }

    /**
     * The minimum value of the axis.
This is often used in combination with the max configuration option.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function min($value) {
        return $this->setProperty('min', $value);
    }

    /**
     * Configures the minor grid lines.  These are the lines that are an extension of the minor ticks through the
     * @param \kendo\dataviz\ui\StockChartValueAxisItemMinorGridLines|array $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function minorGridLines($value) {
        return $this->setProperty('minorGridLines', $value);
    }

    /**
     * The minor ticks of the axis.
     * @param \kendo\dataviz\ui\StockChartValueAxisItemMinorTicks|array $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function minorTicks($value) {
        return $this->setProperty('minorTicks', $value);
    }

    /**
     * The interval between minor divisions.
It defaults to 1/5th of the majorUnit.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function minorUnit($value) {
        return $this->setProperty('minorUnit', $value);
    }

    /**
     * The unique axis name.
     * @param  $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
     * Prevents the automatic axis range from snapping to 0.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function narrowRange($value) {
        return $this->setProperty('narrowRange', $value);
    }

    /**
     * The name of the pane that the axis should be rendered in.
The axis will be rendered in the first (default) pane if not set.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function pane($value) {
        return $this->setProperty('pane', $value);
    }

    /**
     * Adds StockChartValueAxisItemPlotBand to the StockChartValueAxisItem.
     * @param \kendo\dataviz\ui\StockChartValueAxisItemPlotBand|array,... $value one or more StockChartValueAxisItemPlotBand to add.
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function addPlotBand($value) {
        return $this->add('plotBands', func_get_args());
    }

    /**
     * Reverses the axis direction -
values increase from right to left and from top to bottom.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function reverse($value) {
        return $this->setProperty('reverse', $value);
    }

    /**
     * The title of the value axis.
     * @param \kendo\dataviz\ui\StockChartValueAxisItemTitle|array $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

    /**
     * The visibility of the axis.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The crosshair configuration options.
     * @param \kendo\dataviz\ui\StockChartValueAxisItemCrosshair|array $value
     * @return \kendo\dataviz\ui\StockChartValueAxisItem
     */
    public function crosshair($value) {
        return $this->setProperty('crosshair', $value);
    }

}
