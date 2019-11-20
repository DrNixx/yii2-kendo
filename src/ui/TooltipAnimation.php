<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TooltipAnimation extends SerializableObject {

    /**
     * The animation that will be used when a Tooltip closes.
     * @param TooltipAnimationClose|array $value
     * @return TooltipAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation that will be used when a Tooltip opens.
     * @param TooltipAnimationOpen|array $value
     * @return TooltipAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
