<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class StockChartNavigatorSeriesItemOverlay extends SerializableObject {

    /**
     * The gradient name.Available options:
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\StockChartNavigatorSeriesItemOverlay
     */
    public function gradient($value) {
        return $this->setProperty('gradient', $value);
    }

}
