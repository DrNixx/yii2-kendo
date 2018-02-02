<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class AutoCompleteAnimationOpen extends SerializableObject
{
    /**
     * The effect(s) to use when playing the open animation. Multiple effects should be separated with a space.
     * @param string $value
     * @return \yii2\kendo\ui\AutoCompleteAnimationOpen
     */
    public function effects($value)
    {
        return $this->setProperty('effects', $value);
    }

    /**
     * The duration of the open animation in milliseconds.
     * @param float $value
     * @return \yii2\kendo\ui\AutoCompleteAnimationOpen
     */
    public function duration($value)
    {
        return $this->setProperty('duration', $value);
    }
}
