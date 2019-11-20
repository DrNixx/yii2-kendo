<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TabStripAnimationClose extends SerializableObject {

    /**
     * The number of milliseconds used for the visual animation when the current tab is closed.
     * @param float $value
     * @return TabStripAnimationClose
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

    /**
     * A whitespace-delimited string of animation effects that are utilized when the current tab
* is closed. By default not specified - uses the opening animation with reverse.
     * @param string $value
     * @return TabStripAnimationClose
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

}
