<?php

namespace yii2\kendo\dataviz\ui;

/**
* PHP wrapper for the chartArea option of Chart.
*/

use yii2\kendo\SerializableObject;

/**
*/
class ChartArea extends SerializableObject {

    /**
     * The background color of the chart area.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartArea
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The background opacity of the chart area.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartArea
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The border of the chart area.
     * @param \yii2\kendo\dataviz\ui\ChartAreaBorder|array $value
     * @return \yii2\kendo\dataviz\ui\ChartArea
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The height of the chart area.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartArea
     */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
     * The margin of the chart area.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\ChartArea
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The width of the chart area.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartArea
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
