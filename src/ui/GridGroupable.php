<?php
namespace kendo\ui;

use kendo\SerializableObject;

class GridGroupable extends SerializableObject
{

    /**
     * Sets the messages displayed during grouping.
     * @param GridGroupableMessages|array $value
     * @return GridGroupable
     */
    public function messages($value)
    {
        return $this->setProperty('messages', $value);
    }
}
