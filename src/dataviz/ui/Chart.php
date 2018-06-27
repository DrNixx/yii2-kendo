<?php
namespace kendo\dataviz\ui;

use kendo\JavaScriptFunction;
use kendo\ui\Widget;

class Chart extends Widget
{
    protected function kendoName()
    {
        return 'Chart';
    }

    /**
     * Default options for all chart axes.
     * @param  $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function axisDefaults($value) {
        return $this->setProperty('axisDefaults', $value);
    }

    /**
     * Adds ChartCategoryAxisItem to the Chart.
     * @param \kendo\dataviz\ui\ChartCategoryAxisItem|array,... $value one or more ChartCategoryAxisItem to add.
     * @return \kendo\dataviz\ui\Chart
     */
    public function addCategoryAxisItem($value) {
        return $this->add('categoryAxis', func_get_args());
    }

    /**
     * The chart area configuration options.
This is the entire visible area of the chart.
     * @param \kendo\dataviz\ui\ChartArea|array $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function chartArea($value) {
        return $this->setProperty('chartArea', $value);
    }

    /**
     * Sets the data source of the Chart.
     * @param array|\kendo\data\DataSource $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
     * Indicates whether the chart will call read on the data source initially.
     * @param boolean $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function autoBind($value) {
        return $this->setProperty('autoBind', $value);
    }

    /**
     * The chart legend configuration options.
     * @param \kendo\dataviz\ui\ChartLegend|array $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function legend($value) {
        return $this->setProperty('legend', $value);
    }

    /**
     * Adds ChartPane to the Chart.
     * @param \kendo\dataviz\ui\ChartPane|array,... $value one or more ChartPane to add.
     * @return \kendo\dataviz\ui\Chart
     */
    public function addPane($value) {
        return $this->add('panes', func_get_args());
    }

    /**
     * The plot area configuration options. This is the area containing the plotted series.
     * @param \kendo\dataviz\ui\ChartPlotArea|array $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function plotArea($value) {
        return $this->setProperty('plotArea', $value);
    }

    /**
     * Adds ChartSeriesItem to the Chart.
     * @param \kendo\dataviz\ui\ChartSeriesItem|array,... $value one or more ChartSeriesItem to add.
     * @return \kendo\dataviz\ui\Chart
     */
    public function addSeriesItem($value) {
        return $this->add('series', func_get_args());
    }

    /**
     * The default colors for the chart's series. When all colors are used, new colors are pulled from the start again.
     * @param array $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function seriesColors($value) {
        return $this->setProperty('seriesColors', $value);
    }

    /**
     * Default values for each series.
     * @param \kendo\dataviz\ui\ChartSeriesDefaults|array $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function seriesDefaults($value) {
        return $this->setProperty('seriesDefaults', $value);
    }

    /**
     * Sets Chart theme. Available themes: default, blueOpal, black.
     * @param string $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function theme($value) {
        return $this->setProperty('theme', $value);
    }

    /**
     * The chart title configuration options or text.
     * @param \kendo\dataviz\ui\ChartTitle|array $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

    /**
     * The data point tooltip configuration options.
     * @param \kendo\dataviz\ui\ChartTooltip|array $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function tooltip($value) {
        return $this->setProperty('tooltip', $value);
    }

    /**
     * A value indicating if transition animations should be played.
     * @param boolean $value
     * @return \kendo\dataviz\ui\Chart
     */
    public function transitions($value) {
        return $this->setProperty('transitions', $value);
    }

    /**
     * Adds ChartValueAxisItem to the Chart.
     * @param \kendo\dataviz\ui\ChartValueAxisItem|array,... $value one or more ChartValueAxisItem to add.
     * @return \kendo\dataviz\ui\Chart
     */
    public function addValueAxisItem($value) {
        return $this->add('valueAxis', func_get_args());
    }

    /**
     * Adds ChartXAxisItem to the Chart.
     * @param \kendo\dataviz\ui\ChartXAxisItem|array,... $value one or more ChartXAxisItem to add.
     * @return \kendo\dataviz\ui\Chart
     */
    public function addXAxisItem($value) {
        return $this->add('xAxis', func_get_args());
    }

    /**
     * Adds ChartYAxisItem to the Chart.
     * @param \kendo\dataviz\ui\ChartYAxisItem|array,... $value one or more ChartYAxisItem to add.
     * @return \kendo\dataviz\ui\Chart
     */
    public function addYAxisItem($value) {
        return $this->add('yAxis', func_get_args());
    }

    /**
     * Sets the axisLabelClick event of the Chart.
     * Fires when an axis label is clicked.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function axisLabelClick($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('axisLabelClick', $value);
    }

    /**
     * Sets the dataBound event of the Chart.
     * Fires when the chart has received data from the data source
* and is about to render it.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function dataBound($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dataBound', $value);
    }

    /**
     * Sets the dragStart event of the Chart.
     * Fires when the user has used the mouse or a swipe gesture to drag the chart.The drag operation can be aborted by calling e.preventDefault().
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function dragStart($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dragStart', $value);
    }

    /**
     * Sets the drag event of the Chart.
     * Fires as long as the user is dragging the chart using the mouse or swipe gestures.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function drag($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('drag', $value);
    }

    /**
     * Sets the dragEnd event of the Chart.
     * Fires when the user stops dragging the chart.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function dragEnd($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dragEnd', $value);
    }

    /**
     * Sets the plotAreaClick event of the Chart.
     * Fires when plot area is clicked.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function plotAreaClick($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('plotAreaClick', $value);
    }

    /**
     * Sets the seriesClick event of the Chart.
     * Fires when chart series are clicked.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function seriesClick($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('seriesClick', $value);
    }

    /**
     * Sets the seriesHover event of the Chart.
     * Fires when chart series are hovered.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function seriesHover($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('seriesHover', $value);
    }

    /**
     * Sets the zoomStart event of the Chart.
     * Fires when the user has used the mousewheel to zoom the chart.The zoom operation can be aborted by calling e.preventDefault().
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function zoomStart($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('zoomStart', $value);
    }

    /**
     * Sets the zoom event of the Chart.
     * Fires as long as the user is zooming the chart using the mousewheel.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function zoom($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('zoom', $value);
    }

    /**
     * Sets the zoomEnd event of the Chart.
     * Fires when the user stops zooming the chart.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function zoomEnd($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('zoomEnd', $value);
    }

    /**
     * Sets the selectStart event of the Chart.
     * Fires when the user starts modifying the axis selection.The range units are:
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function selectStart($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('selectStart', $value);
    }

    /**
     * Sets the select event of the Chart.
     * Fires when the user modifies the selection.The range units are:
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function select($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }

    /**
     * Sets the selectEnd event of the Chart.
     * Fires when the user completes modifying the selection.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\dataviz\ui\Chart
     */
    public function selectEnd($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('selectEnd', $value);
    }


}
