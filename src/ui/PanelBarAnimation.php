<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class PanelBarAnimation extends SerializableObject
{
    /**
     * The visual animation(s) that will be used when PanelBar items are closed.
     *
     * @param PanelBarAnimationCollapse|array $value
     *
     * @return $this
     */
    public function collapse($value)
    {
        return $this->setProperty('collapse', $value);
    }

    /**
     * The visual animation(s) that will be used when opening items.
     *
     * @param PanelBarAnimationExpand|array $value
     *
     * @return $this
     */
    public function expand($value)
    {
        return $this->setProperty('expand', $value);
    }
}
