<?php

namespace kendo\ui;

use kendo\SerializableObject;

class DateTimePickerAnimation extends SerializableObject {

    /**
     * The animation(s) used for hiding of the pop-up.
     * @param DateTimePickerAnimationClose|array $value
     * @return DateTimePickerAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation(s) used for displaying of the pop-up.
     * @param DateTimePickerAnimationOpen|array $value
     * @return DateTimePickerAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
