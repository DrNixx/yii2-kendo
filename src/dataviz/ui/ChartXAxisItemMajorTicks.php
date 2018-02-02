<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class ChartXAxisItemMajorTicks extends SerializableObject {

    /**
     * The axis major tick size. This is the length of the line in pixels that is drawn to indicate the tick on the chart.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartXAxisItemMajorTicks
     */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
     * The visibility of the major ticks.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\ChartXAxisItemMajorTicks
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
