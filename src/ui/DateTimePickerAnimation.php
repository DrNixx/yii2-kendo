<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class DateTimePickerAnimation extends SerializableObject {

    /**
     * The animation(s) used for hiding of the pop-up.
     * @param \yii2\kendo\ui\DateTimePickerAnimationClose|array $value
     * @return \yii2\kendo\ui\DateTimePickerAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation(s) used for displaying of the pop-up.
     * @param \yii2\kendo\ui\DateTimePickerAnimationOpen|array $value
     * @return \yii2\kendo\ui\DateTimePickerAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
