<?php

namespace kendo\ui;

use kendo\SerializableObject;

class PanelBarAnimationCollapse extends SerializableObject {

    /**
     * The number of milliseconds used for the visual animation when a PanelBar item is closed.
     * @param float $value
     * @return \kendo\ui\PanelBarAnimationCollapse
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

    /**
     * A whitespace-delimited string of animation effects that are utilized when a PanelBar item
is closed. Options include "fadeOut".
     * @param string $value
     * @return \kendo\ui\PanelBarAnimationCollapse
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

}
