<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;
use yii2\kendo\Template;

class StockChartSeriesItemLabels extends SerializableObject {

    /**
     * The background color of the labels.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLabels
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the labels.
     * @param \yii2\kendo\dataviz\ui\StockChartSeriesItemLabelsBorder|array $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLabels
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The text color of the labels.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLabels
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The font style of the labels.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLabels
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * The format of the labels.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLabels
     */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
     * The margin of the labels.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLabels
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The padding of the labels.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLabels
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * Defines the position of the labels.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLabels
     */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
     * Sets the template option of the StockChartSeriesItemLabels.
     * The label template. Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLabels
     */
    public function templateId($value) {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the StockChartSeriesItemLabels.
     * The label template. Template variables:
     * @param string $value The template content.
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLabels
     */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
     * The visibility of the labels.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\StockChartSeriesItemLabels
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
