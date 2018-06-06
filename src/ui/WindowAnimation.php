<?php

namespace kendo\ui;

use kendo\SerializableObject;

class WindowAnimation extends SerializableObject {

    /**
     * The animation that will be used when a Window closes.
     * @param \kendo\ui\WindowAnimationClose|array $value
     * @return \kendo\ui\WindowAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation that will be used when a Window opens.
     * @param \kendo\ui\WindowAnimationOpen|array $value
     * @return \kendo\ui\WindowAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
