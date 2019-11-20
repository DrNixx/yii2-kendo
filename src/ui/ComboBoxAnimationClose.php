<?php

namespace kendo\ui;

use kendo\SerializableObject;

class ComboBoxAnimationClose extends SerializableObject {

    /**
     * Effect to be used for closing of the popup.
     * @param string $value
     * @return ComboBoxAnimationClose
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return ComboBoxAnimationClose
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
