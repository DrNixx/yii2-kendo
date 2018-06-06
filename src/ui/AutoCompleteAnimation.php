<?php
namespace kendo\ui;

use kendo\SerializableObject;

class AutoCompleteAnimation extends SerializableObject
{
    /**
     * The animation played when the suggestion popup is closed.
     * @param \kendo\ui\AutoCompleteAnimationClose|array $value
     * @return \kendo\ui\AutoCompleteAnimation
     */
    public function close($value)
    {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation played when the suggestion popup is opened.
     * @param \kendo\ui\AutoCompleteAnimationOpen|array $value
     * @return \kendo\ui\AutoCompleteAnimation
     */
    public function open($value)
    {
        return $this->setProperty('open', $value);
    }
}
