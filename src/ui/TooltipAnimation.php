<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TooltipAnimation extends SerializableObject {

    /**
     * The animation that will be used when a Tooltip closes.
     * @param \kendo\ui\TooltipAnimationClose|array $value
     * @return \kendo\ui\TooltipAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation that will be used when a Tooltip opens.
     * @param \kendo\ui\TooltipAnimationOpen|array $value
     * @return \kendo\ui\TooltipAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
