<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartCategoryAxisItem extends SerializableObject {

    /**
     * Category index at which the first value axis crosses this axis. (Only for object)Category indicies at which the value axes cross the category axis. (Only for array)Note: Specify an index greater than or equal to the number
of categories to denote the far end of the axis.
     * @param |date|array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function axisCrossingValue($value) {
        return $this->setProperty('axisCrossingValue', $value);
    }

    /**
     * Array of category names.
     * @param array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function categories($value) {
        return $this->setProperty('categories', $value);
    }

    /**
     * Color to apply to all axis elements. Any valid CSS color string will work here, including hex and rgb.
Individual color settings for line and labels take priority.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The data field containing the category name.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function field($value) {
        return $this->setProperty('field', $value);
    }

    /**
     * Positions categories and series points on major ticks. This removes the empty space before and after the series.This option is ignored if either bar, column, ohlc or candlestick series are plotted on the axis.
     * @param boolean $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function justified($value) {
        return $this->setProperty('justified', $value);
    }

    /**
     * Configures the axis labels.
     * @param \kendo\dataviz\ui\ChartCategoryAxisItemLabels|array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function labels($value) {
        return $this->setProperty('labels', $value);
    }

    /**
     * Configures the axis line. This will also effect major and minor ticks, but not gridlines.
     * @param \kendo\dataviz\ui\ChartCategoryAxisItemLine|array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * Configures the major grid lines. These are the lines that are an extension of the major ticks through the
body of the chart.
     * @param \kendo\dataviz\ui\ChartCategoryAxisItemMajorGridLines|array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function majorGridLines($value) {
        return $this->setProperty('majorGridLines', $value);
    }

    /**
     * The major ticks of the axis.
     * @param \kendo\dataviz\ui\ChartCategoryAxisItemMajorTicks|array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function majorTicks($value) {
        return $this->setProperty('majorTicks', $value);
    }

    /**
     * Configures the minor grid lines.  These are the lines that are an extension of the minor ticks through
the body of the chart.Note that minor grid lines are not visible by default, therefore none of these settings will take effect with the minor grid lines visibility being set to true.
     * @param \kendo\dataviz\ui\ChartCategoryAxisItemMinorGridLines|array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function minorGridLines($value) {
        return $this->setProperty('minorGridLines', $value);
    }

    /**
     * The minor ticks of the axis.
     * @param \kendo\dataviz\ui\ChartCategoryAxisItemMinorTicks|array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function minorTicks($value) {
        return $this->setProperty('minorTicks', $value);
    }

    /**
     * The unique axis name.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
     * The name of the pane that the axis should be rendered in.
The axis will be rendered in the first (default) pane if not set.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function pane($value) {
        return $this->setProperty('pane', $value);
    }

    /**
     * Adds ChartCategoryAxisItemPlotBand to the ChartCategoryAxisItem.
     * @param \kendo\dataviz\ui\ChartCategoryAxisItemPlotBand|array,... $value one or more ChartCategoryAxisItemPlotBand to add.
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function addPlotBand($value) {
        return $this->add('plotBands', func_get_args());
    }

    /**
     * Reverses the axis direction -
categories are listed from right to left and from top to bottom.
     * @param boolean $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function reverse($value) {
        return $this->setProperty('reverse', $value);
    }

    /**
     * The selected axis range. If configured, axis selection will be enabled.** Available only for vertical axes **The range units are:
     * @param \kendo\dataviz\ui\ChartCategoryAxisItemSelect|array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function select($value) {
        return $this->setProperty('select', $value);
    }

    /**
     * The title of the category axis.
     * @param \kendo\dataviz\ui\ChartCategoryAxisItemTitle|array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

    /**
     * The axis type.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

    /**
     * Specifies the discrete baseUnitStep values when
either baseUnit is set to "fit" or baseUnitStep is set to "auto".The default configuration is as follows:Each setting can be overriden individually.
     * @param  $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function autoBaseUnitSteps($value) {
        return $this->setProperty('autoBaseUnitSteps', $value);
    }

    /**
     * The base time interval for the axis.
The default baseUnit is determined automatically from the minimum difference
between subsequent categories. Available options:Setting baseUnit to "fit" will set such base unit and baseUnitStep
that the total number of categories does not exceed maxDateGroups.Series data is aggregated for the specified base unit by using the
series.aggregate function.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function baseUnit($value) {
        return $this->setProperty('baseUnit', $value);
    }

    /**
     * Sets the step (interval) between categories in base units.
Specifiying "auto" will set the step to such value that the total number of categories does not exceed maxDateGroups.This option is ignored if baseUnit is set to "fit".
     * @param  $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function baseUnitStep($value) {
        return $this->setProperty('baseUnitStep', $value);
    }

    /**
     * The last date displayed on the axis.
By default, the minimum date is the same as the last category.
This is often used in combination with the min and roundToBaseUnit configuration options to
set up a fixed date range.
     * @param  $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function max($value) {
        return $this->setProperty('max', $value);
    }

    /**
     * The first date displayed on the axis.
By default, the minimum date is the same as the first category.
This is often used in combination with the max and roundToBaseUnit configuration options to
set up a fixed date range.
     * @param  $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function min($value) {
        return $this->setProperty('min', $value);
    }

    /**
     * By default, the first and last dates will be rounded off to the nearest base unit.
Specifying false for this option will disable this behavior.This option is most useful in combination with explicit min and max dates.It will be ignored if either bar, column, ohlc or candlestick series are plotted on the axis.
     * @param boolean $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function roundToBaseUnit($value) {
        return $this->setProperty('roundToBaseUnit', $value);
    }

    /**
     * Specifies the week start day when baseUnit is set to "weeks".
Use the kendo.days constants to specify the day by name.
     * @param float $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function weekStartDay($value) {
        return $this->setProperty('weekStartDay', $value);
    }

    /**
     * Specifies the maximum number of groups (categories) to produce when
either baseUnit is set to "fit" or baseUnitStep is set to "auto".This option is ignored in all other cases.
     * @param float $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function maxDateGroups($value) {
        return $this->setProperty('maxDateGroups', $value);
    }

    /**
     * The visibility of the axis.
     * @param boolean $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The crosshair configuration options.
     * @param \kendo\dataviz\ui\ChartCategoryAxisItemCrosshair|array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItem
     */
    public function crosshair($value) {
        return $this->setProperty('crosshair', $value);
    }

}

