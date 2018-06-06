<?php

namespace kendo\ui;

use kendo\SerializableObject;

class TreeViewAnimation extends SerializableObject {

    /**
     * The animation that will be used when collapsing items.
     * @param \kendo\ui\TreeViewAnimationCollapse|array $value
     * @return \kendo\ui\TreeViewAnimation
     */
    public function collapse($value) {
        return $this->setProperty('collapse', $value);
    }

    /**
     * The animation that will be used when expanding items.
     * @param \kendo\ui\TreeViewAnimationExpand|array $value
     * @return \kendo\ui\TreeViewAnimation
     */
    public function expand($value) {
        return $this->setProperty('expand', $value);
    }

}
