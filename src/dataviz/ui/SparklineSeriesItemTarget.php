<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class SparklineSeriesItemTarget extends SerializableObject {

    /**
     * The target line.
     * @param \kendo\dataviz\ui\SparklineSeriesItemTargetLine|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemTarget
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * The target color.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemTarget
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The border of the target.
     * @param \kendo\dataviz\ui\SparklineSeriesItemTargetBorder|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemTarget
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

}
