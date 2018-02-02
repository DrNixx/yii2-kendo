<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class MenuAnimation extends SerializableObject {

    /**
     * The animation that will be used when closing sub menus.
     * @param \yii2\kendo\ui\MenuAnimationClose|array $value
     * @return \yii2\kendo\ui\MenuAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation that will be used when opening sub menus.
     * @param \yii2\kendo\ui\MenuAnimationOpen|array $value
     * @return \yii2\kendo\ui\MenuAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
