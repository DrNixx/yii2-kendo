<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TooltipAnimationOpen extends SerializableObject {

    /**
     * Effect to be used for opening of the Tooltip.
     * @param string $value
     * @return TooltipAnimationOpen
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return TooltipAnimationOpen
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
