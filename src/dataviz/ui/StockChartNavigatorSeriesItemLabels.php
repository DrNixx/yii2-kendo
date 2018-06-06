<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;
use kendo\Template;

class StockChartNavigatorSeriesItemLabels extends SerializableObject {

    /**
     * The background color of the labels.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabels
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the labels.
     * @param \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabelsBorder|array $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabels
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The text color of the labels.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabels
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The font style of the labels.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabels
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * The format of the labels.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabels
     */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
     * The margin of the labels.
     * @param float| $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabels
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The padding of the labels.
     * @param float| $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabels
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * Defines the position of the labels.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabels
     */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
     * Sets the template option of the StockChartNavigatorSeriesItemLabels.
     * The label template. Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabels
     */
    public function templateId($value) {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the StockChartNavigatorSeriesItemLabels.
     * The label template. Template variables:
     * @param string $value The template content.
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabels
     */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
     * The visibility of the labels.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSeriesItemLabels
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}

