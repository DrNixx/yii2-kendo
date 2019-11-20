<?php
namespace kendo\ui;

use kendo\SerializableObject;

class AutoCompleteAnimation extends SerializableObject
{
    /**
     * The animation played when the suggestion popup is closed.
     * @param AutoCompleteAnimationClose|array $value
     * @return AutoCompleteAnimation
     */
    public function close($value)
    {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation played when the suggestion popup is opened.
     * @param AutoCompleteAnimationOpen|array $value
     * @return AutoCompleteAnimation
     */
    public function open($value)
    {
        return $this->setProperty('open', $value);
    }
}
