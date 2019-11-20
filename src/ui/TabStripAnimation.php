<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TabStripAnimation extends SerializableObject {

    /**
     * The visual animation(s) that will be used when the current tab is closed.
     * @param TabStripAnimationClose|array $value
     * @return TabStripAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The visual animation(s) that will be used when the new tab is shown.
     * @param TabStripAnimationOpen|array $value
     * @return TabStripAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
