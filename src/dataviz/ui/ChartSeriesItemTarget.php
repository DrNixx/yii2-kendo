<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartSeriesItemTarget extends SerializableObject {

    /**
     * The target line.
     * @param \kendo\dataviz\ui\ChartSeriesItemTargetLine|array $value
     * @return \kendo\dataviz\ui\ChartSeriesItemTarget
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * The target color.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartSeriesItemTarget
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The border of the target.
     * @param \kendo\dataviz\ui\ChartSeriesItemTargetBorder|array $value
     * @return \kendo\dataviz\ui\ChartSeriesItemTarget
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

}
