<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\JavaScriptFunction;
use yii2\kendo\UI\Widget;

class StockChart extends Widget {
    protected function name() {
        return 'StockChart';
    }

    /**
     * The field containing the point date.
It is used as a default field for all date axes, including the navigator pane.The data item field value must be either:
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function dateField($value) {
        return $this->setProperty('dateField', $value);
    }

    /**
     * The data navigator configuration options.
     * @param \yii2\kendo\dataviz\ui\StockChartNavigator|array $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function navigator($value) {
        return $this->setProperty('navigator', $value);
    }

    /**
     * Default options for all chart axes.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function axisDefaults($value) {
        return $this->setProperty('axisDefaults', $value);
    }

    /**
     * Adds StockChartCategoryAxisItem to the StockChart.
     * @param \yii2\kendo\dataviz\ui\StockChartCategoryAxisItem|array,... $value one or more StockChartCategoryAxisItem to add.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function addCategoryAxisItem($value) {
        return $this->add('categoryAxis', func_get_args());
    }

    /**
     * The chart area configuration options.
This is the entire visible area of the chart.
     * @param \yii2\kendo\dataviz\ui\StockChartChartArea|array $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function chartArea($value) {
        return $this->setProperty('chartArea', $value);
    }

    /**
     * Sets the data source of the StockChart.
     * @param array|\yii2\kendo\data\DataSource $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
     * Indicates whether the chart will call read on the data source initially.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function autoBind($value) {
        return $this->setProperty('autoBind', $value);
    }

    /**
     * The chart legend configuration options.
     * @param \yii2\kendo\dataviz\ui\StockChartLegend|array $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function legend($value) {
        return $this->setProperty('legend', $value);
    }

    /**
     * Adds StockChartPane to the StockChart.
     * @param \yii2\kendo\dataviz\ui\StockChartPane|array,... $value one or more StockChartPane to add.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function addPane($value) {
        return $this->add('panes', func_get_args());
    }

    /**
     * The plot area configuration options. This is the area containing the plotted series.
     * @param \yii2\kendo\dataviz\ui\StockChartPlotArea|array $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function plotArea($value) {
        return $this->setProperty('plotArea', $value);
    }

    /**
     * Adds StockChartSeriesItem to the StockChart.
     * @param \yii2\kendo\dataviz\ui\StockChartSeriesItem|array,... $value one or more StockChartSeriesItem to add.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function addSeriesItem($value) {
        return $this->add('series', func_get_args());
    }

    /**
     * The default colors for the chart's series. When all colors are used, new colors are pulled from the start again.
     * @param array $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function seriesColors($value) {
        return $this->setProperty('seriesColors', $value);
    }

    /**
     * Default values for each series.
     * @param \yii2\kendo\dataviz\ui\StockChartSeriesDefaults|array $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function seriesDefaults($value) {
        return $this->setProperty('seriesDefaults', $value);
    }

    /**
     * Sets Chart theme. Available themes: default, blueOpal, black.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function theme($value) {
        return $this->setProperty('theme', $value);
    }

    /**
     * The chart title configuration options or text.
     * @param \yii2\kendo\dataviz\ui\StockChartTitle|array $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

    /**
     * The data point tooltip configuration options.
     * @param \yii2\kendo\dataviz\ui\StockChartTooltip|array $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function tooltip($value) {
        return $this->setProperty('tooltip', $value);
    }

    /**
     * A value indicating if transition animations should be played.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function transitions($value) {
        return $this->setProperty('transitions', $value);
    }

    /**
     * Adds StockChartValueAxisItem to the StockChart.
     * @param \yii2\kendo\dataviz\ui\StockChartValueAxisItem|array,... $value one or more StockChartValueAxisItem to add.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function addValueAxisItem($value) {
        return $this->add('valueAxis', func_get_args());
    }

    /**
     * Adds StockChartXAxisItem to the StockChart.
     * @param \yii2\kendo\dataviz\ui\StockChartXAxisItem|array,... $value one or more StockChartXAxisItem to add.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function addXAxisItem($value) {
        return $this->add('xAxis', func_get_args());
    }

    /**
     * Adds StockChartYAxisItem to the StockChart.
     * @param \yii2\kendo\dataviz\ui\StockChartYAxisItem|array,... $value one or more StockChartYAxisItem to add.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function addYAxisItem($value) {
        return $this->add('yAxis', func_get_args());
    }

    /**
     * Sets the axisLabelClick event of the StockChart.
     * Fires when an axis label is clicked.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function axisLabelClick($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('axisLabelClick', $value);
    }

    /**
     * Sets the dataBound event of the StockChart.
     * Fires when the chart has received data from the data source
* and is about to render it.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function dataBound($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dataBound', $value);
    }

    /**
     * Sets the dragStart event of the StockChart.
     * Fires when the user has used the mouse or a swipe gesture to drag the chart.The drag operation can be aborted by calling e.preventDefault().
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function dragStart($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dragStart', $value);
    }

    /**
     * Sets the drag event of the StockChart.
     * Fires as long as the user is dragging the chart using the mouse or swipe gestures.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function drag($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('drag', $value);
    }

    /**
     * Sets the dragEnd event of the StockChart.
     * Fires when the user stops dragging the chart.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function dragEnd($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dragEnd', $value);
    }

    /**
     * Sets the plotAreaClick event of the StockChart.
     * Fires when plot area is clicked.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function plotAreaClick($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('plotAreaClick', $value);
    }

    /**
     * Sets the seriesClick event of the StockChart.
     * Fires when chart series are clicked.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function seriesClick($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('seriesClick', $value);
    }

    /**
     * Sets the seriesHover event of the StockChart.
     * Fires when chart series are hovered.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function seriesHover($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('seriesHover', $value);
    }

    /**
     * Sets the zoomStart event of the StockChart.
     * Fires when the user has used the mousewheel to zoom the chart.The zoom operation can be aborted by calling e.preventDefault().
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function zoomStart($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('zoomStart', $value);
    }

    /**
     * Sets the zoom event of the StockChart.
     * Fires as long as the user is zooming the chart using the mousewheel.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function zoom($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('zoom', $value);
    }

    /**
     * Sets the zoomEnd event of the StockChart.
     * Fires when the user stops zooming the chart.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function zoomEnd($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('zoomEnd', $value);
    }

    /**
     * Sets the selectStart event of the StockChart.
     * Fires when the user starts modifying the axis selection.The range units are:
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function selectStart($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('selectStart', $value);
    }

    /**
     * Sets the select event of the StockChart.
     * Fires when the user modifies the selection.The range units are:
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function select($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }

    /**
     * Sets the selectEnd event of the StockChart.
     * Fires when the user completes modifying the selection.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\dataviz\ui\StockChart
     */
    public function selectEnd($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('selectEnd', $value);
    }


}
