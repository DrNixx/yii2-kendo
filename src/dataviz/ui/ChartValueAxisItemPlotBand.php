<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class ChartValueAxisItemPlotBand extends SerializableObject {

    /**
     * The start position of the plot band in axis units.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemPlotBand
     */
    public function from($value) {
        return $this->setProperty('from', $value);
    }

    /**
     * The end position of the plot band in axis units.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemPlotBand
     */
    public function to($value) {
        return $this->setProperty('to', $value);
    }

    /**
     * The color of the plot band.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemPlotBand
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The opacity of the plot band.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemPlotBand
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

}
