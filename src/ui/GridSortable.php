<?php
namespace kendo\ui;

use kendo\SerializableObject;

class GridSortable extends SerializableObject
{
    /**
     * Defines whether column can have unsorted state.
     * @param boolean $value
     * @return GridSortable
     */
    public function allowUnsort($value)
    {
        return $this->setProperty('allowUnsort', $value);
    }

    /**
     * Defines sorting mode. Possible values:
     * @param string $value
     * @return GridSortable
     */
    public function mode($value)
    {
        return $this->setProperty('mode', $value);
    }
}
