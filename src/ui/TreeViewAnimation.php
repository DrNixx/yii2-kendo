<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TreeViewAnimation extends SerializableObject {

    /**
     * The animation that will be used when collapsing items.
     * @param TreeViewAnimationCollapse|array $value
     * @return TreeViewAnimation
     */
    public function collapse($value) {
        return $this->setProperty('collapse', $value);
    }

    /**
     * The animation that will be used when expanding items.
     * @param TreeViewAnimationExpand|array $value
     * @return TreeViewAnimation
     */
    public function expand($value) {
        return $this->setProperty('expand', $value);
    }

}
