<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TimePickerAnimation extends SerializableObject {

    /**
     * Animation to be used for closing of the popup.
     * @param \kendo\ui\TimePickerAnimationClose|array $value
     * @return \kendo\ui\TimePickerAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * Animation to be used for opening of the popup.
     * @param \kendo\ui\TimePickerAnimationOpen|array $value
     * @return \kendo\ui\TimePickerAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
