<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class DatePickerAnimation extends SerializableObject {

    /**
     * The animation(s) used for hiding of the pop-up.
     * @param \yii2\kendo\ui\DatePickerAnimationClose|array $value
     * @return \yii2\kendo\ui\DatePickerAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation(s) used for displaying of the pop-up.
     * @param \yii2\kendo\ui\DatePickerAnimationOpen|array $value
     * @return \yii2\kendo\ui\DatePickerAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
