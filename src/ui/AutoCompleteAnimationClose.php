<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class AutoCompleteAnimationClose extends SerializableObject
{
    /**
     * The effect(s) to use when playing the close animation. Multiple effects should be separated with a space.
     * @param string $value
     * @return \yii2\kendo\ui\AutoCompleteAnimationClose
     */
    public function effects($value)
    {
        return $this->setProperty('effects', $value);
    }

    /**
     * The duration of the close animation in milliseconds.
     * @param float $value
     * @return \yii2\kendo\ui\AutoCompleteAnimationClose
     */
    public function duration($value)
    {
        return $this->setProperty('duration', $value);
    }
}
