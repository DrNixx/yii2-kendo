<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartSeriesItemHighlightLine extends SerializableObject {

    /**
     * The width of the line.
     * @param float $value
     * @return \kendo\dataviz\ui\ChartSeriesItemHighlightLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
     * The line color.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartSeriesItemHighlightLine
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The opacity of the line.
     * @param float $value
     * @return \kendo\dataviz\ui\ChartSeriesItemHighlightLine
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

}
