<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class TreeViewAnimationCollapse extends SerializableObject {

    /**
     * The number of milliseconds used for the animation when a node is expanded.
     * @param float $value
     * @return \yii2\kendo\ui\TreeViewAnimationCollapse
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

    /**
     * A whitespace-delimited string of animation effects that are utilized when a TreeView node
is collapsed. Options include "fadeOut".
     * @param string $value
     * @return \yii2\kendo\ui\TreeViewAnimationCollapse
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

}
