<?php
namespace kendo\ui;

use kendo\SerializableObject;

class EditorToolItem extends SerializableObject
{
    /**
     * The string that the popup item will show.
     * @param string $value
     * @return EditorToolItem
     */
    public function text($value)
    {
        return $this->setProperty('text', $value);
    }

    /**
     * The value that will be applied by the tool when this item is selected.
     * @param string $value
     * @return EditorToolItem
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
    }
}
