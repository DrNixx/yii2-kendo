<?php

namespace kendo\ui;

use kendo\SerializableObject;

class DropDownListAnimationClose extends SerializableObject {

    /**
     * Effect to be used for closing of the popup.
     * @param string $value
     * @return \kendo\ui\DropDownListAnimationClose
     */
    public function effects($value)
    {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return \kendo\ui\DropDownListAnimationClose
     */
    public function duration($value)
    {
        return $this->setProperty('duration', $value);
    }

}
