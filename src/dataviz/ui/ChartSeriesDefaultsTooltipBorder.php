<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class ChartSeriesDefaultsTooltipBorder extends SerializableObject {

    /**
     * The color of the border.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesDefaultsTooltipBorder
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The width of the border.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesDefaultsTooltipBorder
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
