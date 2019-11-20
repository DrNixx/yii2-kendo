<?php

namespace kendo\ui;

use kendo\SerializableObject;

class WindowAnimation extends SerializableObject {

    /**
     * The animation that will be used when a Window closes.
     * @param WindowAnimationClose|array $value
     * @return WindowAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation that will be used when a Window opens.
     * @param WindowAnimationOpen|array $value
     * @return WindowAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
