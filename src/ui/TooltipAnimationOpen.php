<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TooltipAnimationOpen extends SerializableObject {

    /**
     * Effect to be used for opening of the Tooltip.
     * @param string $value
     * @return \kendo\ui\TooltipAnimationOpen
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return \kendo\ui\TooltipAnimationOpen
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
