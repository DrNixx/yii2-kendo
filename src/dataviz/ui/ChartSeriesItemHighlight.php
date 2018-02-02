<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class ChartSeriesItemHighlight extends SerializableObject {

    /**
     * A value indicating if the series points should be highlighted.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemHighlight
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * The border of highlighted points. The color is computed automatically from the base point color.** Applicable to bubble, pie, candlestick and ohlc series. **
     * @param \yii2\kendo\dataviz\ui\ChartSeriesItemHighlightBorder|array $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemHighlight
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The highlight color.** Available only for pie series **
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemHighlight
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * Line options for highlighted points. The color is computed automatically from the base point color.** Available only for candlestick series **
     * @param \yii2\kendo\dataviz\ui\ChartSeriesItemHighlightLine|array $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemHighlight
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * The opacity of the highlighted points.** Applicable to bubble, pie, candlestick and ohlc series. **
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartSeriesItemHighlight
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

}
