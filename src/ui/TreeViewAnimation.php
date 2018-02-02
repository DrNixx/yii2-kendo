<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class TreeViewAnimation extends SerializableObject {

    /**
     * The animation that will be used when collapsing items.
     * @param \yii2\kendo\ui\TreeViewAnimationCollapse|array $value
     * @return \yii2\kendo\ui\TreeViewAnimation
     */
    public function collapse($value) {
        return $this->setProperty('collapse', $value);
    }

    /**
     * The animation that will be used when expanding items.
     * @param \yii2\kendo\ui\TreeViewAnimationExpand|array $value
     * @return \yii2\kendo\ui\TreeViewAnimation
     */
    public function expand($value) {
        return $this->setProperty('expand', $value);
    }

}
