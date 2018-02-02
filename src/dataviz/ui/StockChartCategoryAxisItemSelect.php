<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class StockChartCategoryAxisItemSelect extends SerializableObject {

    /**
     * The lower boundary of the selected range.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartCategoryAxisItemSelect
     */
    public function from($value) {
        return $this->setProperty('from', $value);
    }

    /**
     * The upper boundary of the selected range.Note: The category with the specified index (date) is not included in the selected range
unless the axis is justified. In order to select all categories specify
a value larger than the last category index (date).
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartCategoryAxisItemSelect
     */
    public function to($value) {
        return $this->setProperty('to', $value);
    }

    /**
     * The minimum value that is selectable by the user.
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartCategoryAxisItemSelect
     */
    public function min($value) {
        return $this->setProperty('min', $value);
    }

    /**
     * The maximum value that is selectable by the user.Note: The category with the specified index (date) is not included in the selected range
unless the axis is justified. In order to select all categories specify
a value larger than the last category index (date).
     * @param  $value
     * @return \yii2\kendo\dataviz\ui\StockChartCategoryAxisItemSelect
     */
    public function max($value) {
        return $this->setProperty('max', $value);
    }

    /**
     * Mousewheel zoom settings for the selection.
     * @param \yii2\kendo\dataviz\ui\StockChartCategoryAxisItemSelectMousewheel|array $value
     * @return \yii2\kendo\dataviz\ui\StockChartCategoryAxisItemSelect
     */
    public function mousewheel($value) {
        return $this->setProperty('mousewheel', $value);
    }

}
