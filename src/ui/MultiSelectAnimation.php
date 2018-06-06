<?php

namespace kendo\ui;

use kendo\SerializableObject;

class MultiSelectAnimation extends SerializableObject {

    /**
     * Animation to be used for closing of the popup.
     * @param \kendo\ui\MultiSelectAnimationClose|array $value
     * @return \kendo\ui\MultiSelectAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * Animation to be used for opening of the popup.
     * @param \kendo\ui\MultiSelectAnimationOpen|array $value
     * @return \kendo\ui\MultiSelectAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
