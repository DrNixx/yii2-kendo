<?php

namespace kendo\ui;

use kendo\SerializableObject;

class WindowAnimationOpen extends SerializableObject {

    /**
     * Effect to be used for opening of the popup.
     * @param string $value
     * @return WindowAnimationOpen
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return WindowAnimationOpen
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
