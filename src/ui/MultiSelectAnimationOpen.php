<?php

namespace kendo\ui;

use kendo\SerializableObject;

class MultiSelectAnimationOpen extends SerializableObject {

    /**
     * Effect to be used for opening of the popup.
     * @param string $value
     * @return MultiSelectAnimationOpen
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return MultiSelectAnimationOpen
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
