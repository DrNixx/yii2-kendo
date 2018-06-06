<?php
namespace kendo\data;

use kendo\SerializableObject;

class DataSourceFilterItem extends SerializableObject
{
    /**
     * Specifies the filter operator.
     * One of the following values "eq", "neq", "lt", "lte", "gt", "gte", "startswith", "endswith", "contains".
     * @param string $value
     * @return \kendo\data\DataSourceFilterItem
     */
    public function operator($value)
    {
        return $this->setProperty('operator', $value);
    }

    /**
     * Specifies the field to filter by.
     * @param string $value
     * @return \kendo\data\DataSourceFilterItem
     */
    public function field($value)
    {
        return $this->setProperty('field', $value);
    }

    /**
     * Specifies the value to filter for.
     * @param  $value
     * @return \kendo\data\DataSourceFilterItem
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
    }
}
