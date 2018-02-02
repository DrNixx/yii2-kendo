<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class TooltipAnimation extends SerializableObject {

    /**
     * The animation that will be used when a Tooltip closes.
     * @param \yii2\kendo\ui\TooltipAnimationClose|array $value
     * @return \yii2\kendo\ui\TooltipAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation that will be used when a Tooltip opens.
     * @param \yii2\kendo\ui\TooltipAnimationOpen|array $value
     * @return \yii2\kendo\ui\TooltipAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
