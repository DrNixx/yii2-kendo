<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class AutoCompleteAnimation extends SerializableObject
{
    /**
     * The animation played when the suggestion popup is closed.
     * @param \yii2\kendo\ui\AutoCompleteAnimationClose|array $value
     * @return \yii2\kendo\ui\AutoCompleteAnimation
     */
    public function close($value)
    {
        return $this->setProperty('close', $value);
    }

    /**
     * The animation played when the suggestion popup is opened.
     * @param \yii2\kendo\ui\AutoCompleteAnimationOpen|array $value
     * @return \yii2\kendo\ui\AutoCompleteAnimation
     */
    public function open($value)
    {
        return $this->setProperty('open', $value);
    }
}
