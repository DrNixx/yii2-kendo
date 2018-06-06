<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TimePickerAnimationClose extends SerializableObject {

    /**
     * Effect to be used for closing of the popup.
     * @param string $value
     * @return \kendo\ui\TimePickerAnimationClose
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return \kendo\ui\TimePickerAnimationClose
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
