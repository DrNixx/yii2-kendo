<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartYAxisItemTitle extends SerializableObject {

    /**
     * The background color of the title. Any valid CSS color string will work here, including
hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemTitle
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the title.
     * @param \kendo\dataviz\ui\StockChartYAxisItemTitleBorder|array $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemTitle
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The text color of the title. Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemTitle
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The font style of the title.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemTitle
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * The margin of the title.
     * @param float| $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemTitle
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The padding of the title.
     * @param float| $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemTitle
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * The position of the title.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemTitle
     */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
     * The rotation angle of the title.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemTitle
     */
    public function rotation($value) {
        return $this->setProperty('rotation', $value);
    }

    /**
     * The text of the title.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemTitle
     */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
     * The visibility of the title.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartYAxisItemTitle
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
