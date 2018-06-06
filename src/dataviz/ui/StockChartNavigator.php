<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartNavigator extends SerializableObject {

    /**
     * Sets the data source of the StockChartNavigator.
     * @param array|\kendo\data\DataSource $value
     * @return \kendo\dataviz\ui\StockChartNavigator
     */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
     * Indicates whether the navigator will call read on the data source initially.
Applicable only when using a dedicated navigator data source.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartNavigator
     */
    public function autoBind($value) {
        return $this->setProperty('autoBind', $value);
    }

    /**
     * The field containing the point date.
It is used as a default field for the navigator axis.The data item field value must be either:
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartNavigator
     */
    public function dateField($value) {
        return $this->setProperty('dateField', $value);
    }

    /**
     * The visibility of the navigator.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartNavigator
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * Adds StockChartNavigatorSeriesItem to the StockChartNavigator.
     * @param \kendo\dataviz\ui\StockChartNavigatorSeriesItem|array,... $value one or more StockChartNavigatorSeriesItem to add.
     * @return \kendo\dataviz\ui\StockChartNavigator
     */
    public function addSeriesItem($value) {
        return $this->add('series', func_get_args());
    }

    /**
     * Specifies the initially selected range.The full range of values is shown if no range is specified.
     * @param \kendo\dataviz\ui\StockChartNavigatorSelect|array $value
     * @return \kendo\dataviz\ui\StockChartNavigator
     */
    public function select($value) {
        return $this->setProperty('select', $value);
    }

    /**
     * Default options for the navigator hint.
     * @param \kendo\dataviz\ui\StockChartNavigatorHint|array $value
     * @return \kendo\dataviz\ui\StockChartNavigator
     */
    public function hint($value) {
        return $this->setProperty('hint', $value);
    }

}
