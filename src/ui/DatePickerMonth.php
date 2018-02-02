<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class DatePickerMonth extends SerializableObject {

    /**
     * Template to be used for rendering the cells in the calendar "month" view, which are in range.
     * @param string $value
     * @return \yii2\kendo\ui\DatePickerMonth
     */
    public function content($value) {
        return $this->setProperty('content', $value);
    }

    /**
     * The template used for rendering the cells in the calendar "month" view, which are not in the range between
the minimum and maximum values.
     * @param string $value
     * @return \yii2\kendo\ui\DatePickerMonth
     */
    public function _empty($value) {
        return $this->setProperty('empty', $value);
    }

}
