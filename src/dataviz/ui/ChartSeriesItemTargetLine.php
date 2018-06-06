<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartSeriesItemTargetLine extends SerializableObject {

    /**
     * The width of the line.
     * @param  $value
     * @return \kendo\dataviz\ui\ChartSeriesItemTargetLine
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}

