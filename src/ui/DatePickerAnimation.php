<?php

namespace kendo\ui;

use kendo\SerializableObject;

class DatePickerAnimation extends SerializableObject {

    /**
     * The animation(s) used for hiding of the pop-up.
     * @param \kendo\ui\DatePickerAnimationClose|array $value
     * @return \kendo\ui\DatePickerAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation(s) used for displaying of the pop-up.
     * @param \kendo\ui\DatePickerAnimationOpen|array $value
     * @return \kendo\ui\DatePickerAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
