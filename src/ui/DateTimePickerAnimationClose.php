<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class DateTimePickerAnimationClose extends SerializableObject {

    /**
     * Effect to be used for closing of the popup.
     * @param string $value
     * @return \yii2\kendo\ui\DateTimePickerAnimationClose
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return \yii2\kendo\ui\DateTimePickerAnimationClose
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
