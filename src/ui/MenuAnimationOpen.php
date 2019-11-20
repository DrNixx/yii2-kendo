<?php

namespace kendo\ui;

use kendo\SerializableObject;

class MenuAnimationOpen extends SerializableObject {

    /**
     * Effect to be used for opening of the popup.
     * @param string $value
     * @return MenuAnimationOpen
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return MenuAnimationOpen
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
