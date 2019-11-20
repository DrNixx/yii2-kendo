<?php

namespace kendo\ui;

use kendo\SerializableObject;

class DatePickerAnimation extends SerializableObject {

    /**
     * The animation(s) used for hiding of the pop-up.
     * @param DatePickerAnimationClose|array $value
     * @return DatePickerAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation(s) used for displaying of the pop-up.
     * @param DatePickerAnimationOpen|array $value
     * @return DatePickerAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
