<?php

namespace kendo\dataviz\ui;

use kendo\UI\Widget;

class RadialGauge extends Widget {
    protected function kendoName() {
        return 'RadialGauge';
    }

    /**
     * The gauge area configuration options.
This is the entire visible area of the gauge.
     * @param \kendo\dataviz\ui\RadialGaugeGaugeArea|array $value
     * @return \kendo\dataviz\ui\RadialGauge
     */
    public function gaugeArea($value) {
        return $this->setProperty('gaugeArea', $value);
    }

    /**
     * The pointer configuration options.
     * @param \kendo\dataviz\ui\RadialGaugePointer|array $value
     * @return \kendo\dataviz\ui\RadialGauge
     */
    public function pointer($value) {
        return $this->setProperty('pointer', $value);
    }

    /**
     * The width of the range indicators.
     * @param float $value
     * @return \kendo\dataviz\ui\RadialGauge
     */
    public function rangeSize($value) {
        return $this->setProperty('rangeSize', $value);
    }

    /**
     * The distance from the range indicators to the ticks.
     * @param float $value
     * @return \kendo\dataviz\ui\RadialGauge
     */
    public function rangeDistance($value) {
        return $this->setProperty('rangeDistance', $value);
    }

    /**
     * Configures the scale.
     * @param \kendo\dataviz\ui\RadialGaugeScale|array $value
     * @return \kendo\dataviz\ui\RadialGauge
     */
    public function scale($value) {
        return $this->setProperty('scale', $value);
    }

    /**
     * A value indicating if transition animations should be played.
     * @param boolean $value
     * @return \kendo\dataviz\ui\RadialGauge
     */
    public function transitions($value) {
        return $this->setProperty('transitions', $value);
    }


}

