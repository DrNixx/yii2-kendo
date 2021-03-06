<?php
namespace kendo\ui;

use kendo\SerializableObject;

class GridScrollable extends SerializableObject
{
    /**
     * Enable/disable virtual scrolling. When enabled the grid will display only
     * a single page of data (configured via dataSource.pageSize).
     *
     * @param boolean $value
     *
     * @return $this
     */
    public function virtual($value)
    {
        return $this->setProperty('virtual', $value);
    }
}
