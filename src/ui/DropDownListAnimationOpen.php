<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class DropDownListAnimationOpen extends SerializableObject {

    /**
     * Effect to be used for opening of the popup.
     * @param string $value
     * @return \yii2\kendo\ui\DropDownListAnimationOpen
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return \yii2\kendo\ui\DropDownListAnimationOpen
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
