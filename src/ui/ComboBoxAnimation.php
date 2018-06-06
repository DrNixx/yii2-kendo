<?php
namespace kendo\ui;

use kendo\SerializableObject;

class ComboBoxAnimation extends SerializableObject
{
    /**
     * Animation to be used for closing of the popup.
     * @param \kendo\ui\ComboBoxAnimationClose|array $value
     * @return \kendo\ui\ComboBoxAnimation
     */
    public function close($value)
    {
        return $this->setProperty('close', $value);
    }

    /**
     * Animation to be used for opening of the popup.
     * @param \kendo\ui\ComboBoxAnimationOpen|array $value
     * @return \kendo\ui\ComboBoxAnimation
     */
    public function open($value)
    {
        return $this->setProperty('open', $value);
    }
}
