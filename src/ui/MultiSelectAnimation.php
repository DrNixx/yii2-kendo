<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class MultiSelectAnimation extends SerializableObject {

    /**
     * Animation to be used for closing of the popup.
     * @param \yii2\kendo\ui\MultiSelectAnimationClose|array $value
     * @return \yii2\kendo\ui\MultiSelectAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * Animation to be used for opening of the popup.
     * @param \yii2\kendo\ui\MultiSelectAnimationOpen|array $value
     * @return \yii2\kendo\ui\MultiSelectAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
