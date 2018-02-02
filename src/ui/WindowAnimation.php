<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class WindowAnimation extends SerializableObject {

    /**
     * The animation that will be used when a Window closes.
     * @param \yii2\kendo\ui\WindowAnimationClose|array $value
     * @return \yii2\kendo\ui\WindowAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation that will be used when a Window opens.
     * @param \yii2\kendo\ui\WindowAnimationOpen|array $value
     * @return \yii2\kendo\ui\WindowAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
