<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class TooltipAnimationOpen extends SerializableObject {

    /**
     * Effect to be used for opening of the Tooltip.
     * @param string $value
     * @return \yii2\kendo\ui\TooltipAnimationOpen
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return \yii2\kendo\ui\TooltipAnimationOpen
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
