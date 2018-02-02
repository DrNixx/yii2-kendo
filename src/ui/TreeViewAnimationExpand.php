<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class TreeViewAnimationExpand extends SerializableObject {

    /**
     * The number of milliseconds used for the animation when a
node is expanded.
     * @param float $value
     * @return \yii2\kendo\ui\TreeViewAnimationExpand
     */
    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

    /**
     * A whitespace-delimited string of animation effects that are utilized when a TreeView node
is expanded. Options include "expandVertical" and "fadeIn".
     * @param string $value
     * @return \yii2\kendo\ui\TreeViewAnimationExpand
     */
    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    /**
     * 
     * @param boolean $value
     * @return \yii2\kendo\ui\TreeViewAnimationExpand
     */
    public function show($value) {
        return $this->setProperty('show', $value);
    }

}
