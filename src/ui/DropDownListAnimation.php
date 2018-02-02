<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class DropDownListAnimation extends SerializableObject {

    /**
     * Animation to be used for closing of the popup.
     * @param \yii2\kendo\ui\DropDownListAnimationClose|array $value
     * @return \yii2\kendo\ui\DropDownListAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * Animation to be used for opening of the popup.
     * @param \yii2\kendo\ui\DropDownListAnimationOpen|array $value
     * @return \yii2\kendo\ui\DropDownListAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
