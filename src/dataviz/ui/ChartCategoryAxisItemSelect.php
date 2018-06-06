<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartCategoryAxisItemSelect extends SerializableObject {

    /**
     * The lower boundary of the selected range.
     * @param  $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItemSelect
     */
    public function from($value) {
        return $this->setProperty('from', $value);
    }

    /**
     * The upper boundary of the selected range.Note: The category with the specified index (date) is not included in the selected range
unless the axis is justified. In order to select all categories specify
a value larger than the last category index (date).
     * @param  $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItemSelect
     */
    public function to($value) {
        return $this->setProperty('to', $value);
    }

    /**
     * The minimum value that is selectable by the user.
     * @param  $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItemSelect
     */
    public function min($value) {
        return $this->setProperty('min', $value);
    }

    /**
     * The maximum value that is selectable by the user.Note: The category with the specified index (date) is not included in the selected range
unless the axis is justified. In order to select all categories specify
a value larger than the last category index (date).
     * @param  $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItemSelect
     */
    public function max($value) {
        return $this->setProperty('max', $value);
    }

    /**
     * Mousewheel zoom settings for the selection.
     * @param \kendo\dataviz\ui\ChartCategoryAxisItemSelectMousewheel|array $value
     * @return \kendo\dataviz\ui\ChartCategoryAxisItemSelect
     */
    public function mousewheel($value) {
        return $this->setProperty('mousewheel', $value);
    }

}
