<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;
use yii2\kendo\Template;

class StockChartNavigatorHint extends SerializableObject {

    /**
     * The visibility of the hint.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\StockChartNavigatorHint
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * Sets the template option of the StockChartNavigatorHint.
     * The hint template.
Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \yii2\kendo\dataviz\ui\StockChartNavigatorHint
     */
    public function templateId($value) {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the StockChartNavigatorHint.
     * The hint template.
Template variables:
     * @param string $value The template content.
     * @return \yii2\kendo\dataviz\ui\StockChartNavigatorHint
     */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
     * The format of the hint.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartNavigatorHint
     */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

}
