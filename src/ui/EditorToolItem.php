<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class EditorToolItem extends SerializableObject
{
    /**
     * The string that the popup item will show.
     * @param string $value
     * @return \yii2\kendo\ui\EditorToolItem
     */
    public function text($value)
    {
        return $this->setProperty('text', $value);
    }

    /**
     * The value that will be applied by the tool when this item is selected.
     * @param string $value
     * @return \yii2\kendo\ui\EditorToolItem
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
    }
}
