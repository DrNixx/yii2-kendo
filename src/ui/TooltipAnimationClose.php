<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TooltipAnimationClose extends SerializableObject {

    /**
     * Effect to be used for closing of the tooltip.
     * @param string $value
     * @return \kendo\ui\TooltipAnimationClose
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return \kendo\ui\TooltipAnimationClose
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
