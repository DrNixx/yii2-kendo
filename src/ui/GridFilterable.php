<?php
namespace kendo\ui;

use kendo\SerializableObject;

class GridFilterable extends SerializableObject
{
    /**
     * Indicates whether second filter input is enabled/disabled.
     * @param boolean $value
     * @return GridFilterable
     */
    public function extra($value)
    {
        return $this->setProperty('extra', $value);
    }

    /**
     * Sets the filter menu messages.
     * @param GridFilterableMessages|array $value
     * @return GridFilterable
     */
    public function messages($value)
    {
        return $this->setProperty('messages', $value);
    }

    /**
     * Enable/Disable and set the text of filter operators.
     * @param GridFilterableOperators|array $value
     * @return GridFilterable
     */
    public function operators($value)
    {
        return $this->setProperty('operators', $value);
    }
}
