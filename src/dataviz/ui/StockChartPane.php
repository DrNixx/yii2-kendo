<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartPane extends SerializableObject {

    /**
     * The unique pane name.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartPane
     */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
     * The margin of the pane.
     * @param float| $value
     * @return \kendo\dataviz\ui\StockChartPane
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The padding of the pane.
     * @param float| $value
     * @return \kendo\dataviz\ui\StockChartPane
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * The background color of the pane.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartPane
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the pane.
     * @param \kendo\dataviz\ui\StockChartPaneBorder|array $value
     * @return \kendo\dataviz\ui\StockChartPane
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The pane height in pixels.
     * @param float $value
     * @return \kendo\dataviz\ui\StockChartPane
     */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
     * The pane title text or configuration.
     * @param string|\kendo\dataviz\ui\StockChartPaneTitle|array $value
     * @return \kendo\dataviz\ui\StockChartPane
     */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

}
