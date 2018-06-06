<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class SparklineSeriesItemHighlight extends SerializableObject {

    /**
     * The border of highlighted points. The color is computed automatically from the base point color.** Applicable to pie series. **
     * @param \kendo\dataviz\ui\SparklineSeriesItemHighlightBorder|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemHighlight
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The highlight color.** Available only for pie series **
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemHighlight
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The opacity of the highlighted points.** Applicable to pie series. **
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemHighlight
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * A value indicating if the series points should be highlighted.
     * @param boolean $value
     * @return \kendo\dataviz\ui\SparklineSeriesItemHighlight
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
