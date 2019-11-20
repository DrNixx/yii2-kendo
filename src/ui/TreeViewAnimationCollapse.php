<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TreeViewAnimationCollapse extends SerializableObject {

    /**
     * The number of milliseconds used for the animation when a node is expanded.
     * @param float $value
     * @return TreeViewAnimationCollapse
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

    /**
     * A whitespace-delimited string of animation effects that are utilized when a TreeView node
* is collapsed. Options include "fadeOut".
     * @param string $value
     * @return TreeViewAnimationCollapse
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

}
