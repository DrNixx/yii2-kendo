<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class ComboBoxAnimation extends SerializableObject
{
    /**
     * Animation to be used for closing of the popup.
     * @param \yii2\kendo\ui\ComboBoxAnimationClose|array $value
     * @return \yii2\kendo\ui\ComboBoxAnimation
     */
    public function close($value)
    {
        return $this->setProperty('close', $value);
    }

    /**
     * Animation to be used for opening of the popup.
     * @param \yii2\kendo\ui\ComboBoxAnimationOpen|array $value
     * @return \yii2\kendo\ui\ComboBoxAnimation
     */
    public function open($value)
    {
        return $this->setProperty('open', $value);
    }
}
