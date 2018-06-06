<?php

namespace kendo\ui;

use kendo\SerializableObject;

class DateTimePickerAnimation extends SerializableObject {

    /**
     * The animation(s) used for hiding of the pop-up.
     * @param \kendo\ui\DateTimePickerAnimationClose|array $value
     * @return \kendo\ui\DateTimePickerAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation(s) used for displaying of the pop-up.
     * @param \kendo\ui\DateTimePickerAnimationOpen|array $value
     * @return \kendo\ui\DateTimePickerAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
