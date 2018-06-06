<?php

namespace kendo\ui;

use kendo\SerializableObject;

class MenuAnimation extends SerializableObject {

    /**
     * The animation that will be used when closing sub menus.
     * @param \kendo\ui\MenuAnimationClose|array $value
     * @return \kendo\ui\MenuAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation that will be used when opening sub menus.
     * @param \kendo\ui\MenuAnimationOpen|array $value
     * @return \kendo\ui\MenuAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
