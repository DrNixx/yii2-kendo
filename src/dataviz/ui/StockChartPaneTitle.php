<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartPaneTitle extends SerializableObject {

    /**
     * The background color of the title. Any valid CSS color string will work here, including
hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartPaneTitle
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the title.
     * @param \kendo\dataviz\ui\StockChartPaneTitleBorder|array $value
     * @return \kendo\dataviz\ui\StockChartPaneTitle
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The text color of the title. Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartPaneTitle
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The font style of the title.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartPaneTitle
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * The margin of the title.
     * @param float| $value
     * @return \kendo\dataviz\ui\StockChartPaneTitle
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The position of the title.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartPaneTitle
     */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
     * The text of the title.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartPaneTitle
     */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
     * The visibility of the title.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartPaneTitle
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
