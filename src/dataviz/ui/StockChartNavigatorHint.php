<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;
use kendo\Template;

class StockChartNavigatorHint extends SerializableObject {

    /**
     * The visibility of the hint.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartNavigatorHint
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * Sets the template option of the StockChartNavigatorHint.
     * The hint template.
Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\dataviz\ui\StockChartNavigatorHint
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
     * @return \kendo\dataviz\ui\StockChartNavigatorHint
     */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
     * The format of the hint.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartNavigatorHint
     */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

}
