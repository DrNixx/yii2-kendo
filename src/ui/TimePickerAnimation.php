<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class TimePickerAnimation extends SerializableObject {

    /**
     * Animation to be used for closing of the popup.
     * @param \yii2\kendo\ui\TimePickerAnimationClose|array $value
     * @return \yii2\kendo\ui\TimePickerAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * Animation to be used for opening of the popup.
     * @param \yii2\kendo\ui\TimePickerAnimationOpen|array $value
     * @return \yii2\kendo\ui\TimePickerAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
