<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartSeriesItemMarkers extends SerializableObject {

    /**
     * The background color of the current series markers.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartSeriesItemMarkers
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the markers.
     * @param \kendo\dataviz\ui\ChartSeriesItemMarkersBorder|array $value
     * @return \kendo\dataviz\ui\ChartSeriesItemMarkers
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The marker size.
     * @param float $value
     * @return \kendo\dataviz\ui\ChartSeriesItemMarkers
     */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
     * Configures the markers shape type.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartSeriesItemMarkers
     */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

    /**
     * The markers visibility.
     * @param boolean $value
     * @return \kendo\dataviz\ui\ChartSeriesItemMarkers
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
