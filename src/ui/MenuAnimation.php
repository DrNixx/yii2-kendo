<?php

namespace kendo\ui;

use kendo\SerializableObject;

class MenuAnimation extends SerializableObject {

    /**
     * The animation that will be used when closing sub menus.
     * @param MenuAnimationClose|array $value
     * @return MenuAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation that will be used when opening sub menus.
     * @param MenuAnimationOpen|array $value
     * @return MenuAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
