<?php

namespace kendo\ui;

use kendo\SerializableObject;

class MultiSelectAnimation extends SerializableObject {

    /**
     * Animation to be used for closing of the popup.
     * @param MultiSelectAnimationClose|array $value
     * @return MultiSelectAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * Animation to be used for opening of the popup.
     * @param MultiSelectAnimationOpen|array $value
     * @return MultiSelectAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
