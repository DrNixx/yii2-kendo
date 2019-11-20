<?php

namespace kendo\ui;

use kendo\SerializableObject;

class GridColumnMenu extends SerializableObject
{

    /**
     * Enable/disable columns section in column header menu.
     * @param boolean $value
     * @return GridColumnMenu
     */
    public function columns($value)
    {
        return $this->setProperty('columns', $value);
    }

    /**
     * Enable/disable filter section in column header menu.
     * @param boolean $value
     * @return GridColumnMenu
     */
    public function filterable($value)
    {
        return $this->setProperty('filterable', $value);
    }

    /**
     * Enable/disable sorting section in column header menu.
     * @param boolean $value
     * @return GridColumnMenu
     */
    public function sortable($value)
    {
        return $this->setProperty('sortable', $value);
    }

    /**
     * Sets the columnMenu messages.
     * @param GridColumnMenuMessages|array $value
     * @return GridColumnMenu
     */
    public function messages($value)
    {
        return $this->setProperty('messages', $value);
    }
}
