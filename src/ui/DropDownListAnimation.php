<?php

namespace kendo\ui;

use kendo\SerializableObject;

class DropDownListAnimation extends SerializableObject {

    /**
     * Animation to be used for closing of the popup.
     * @param \kendo\ui\DropDownListAnimationClose|array $value
     * @return \kendo\ui\DropDownListAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * Animation to be used for opening of the popup.
     * @param \kendo\ui\DropDownListAnimationOpen|array $value
     * @return \kendo\ui\DropDownListAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
