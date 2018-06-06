<?php
namespace kendo\data;

use kendo\SerializableObject;

class DataSourceSortItem extends SerializableObject
{
    /**
     * Sets the field to sort on.
     * @param string $value
     * @return \kendo\data\DataSourceSortItem
     */
    public function field($value)
    {
        return $this->setProperty('field', $value);
    }

    /**
     * Sets the sort direction.
     * Possible values are: "asc", "desc", null. If null is set, the sort expression is removed.
     * @param string $value
     * @return \kendo\data\DataSourceSortItem
     */
    public function dir($value)
    {
        return $this->setProperty('dir', $value);
    }
}
