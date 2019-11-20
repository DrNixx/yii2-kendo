<?php

namespace kendo\ui;

use kendo\SerializableObject;

class MenuAnimationClose extends SerializableObject {

    /**
     * Effect to be used for closing of the popup.
     * @param string $value
     * @return MenuAnimationClose
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return MenuAnimationClose
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
