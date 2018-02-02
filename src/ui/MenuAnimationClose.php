<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class MenuAnimationClose extends SerializableObject {

    /**
     * Effect to be used for closing of the popup.
     * @param string $value
     * @return \yii2\kendo\ui\MenuAnimationClose
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * Difines the animation duration.
     * @param float $value
     * @return \yii2\kendo\ui\MenuAnimationClose
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

}
