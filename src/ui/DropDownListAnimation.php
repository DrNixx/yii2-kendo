<?php

namespace kendo\ui;

use kendo\SerializableObject;

class DropDownListAnimation extends SerializableObject {

    /**
     * Animation to be used for closing of the popup.
     * @param DropDownListAnimationClose|array $value
     * @return DropDownListAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * Animation to be used for opening of the popup.
     * @param DropDownListAnimationOpen|array $value
     * @return DropDownListAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
