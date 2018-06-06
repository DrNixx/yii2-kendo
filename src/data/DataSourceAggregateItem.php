<?php
namespace kendo\data;

use kendo\SerializableObject;

class DataSourceAggregateItem extends SerializableObject
{
    /**
     * Specifies the field on which the aggregate will be calculated.
     * @param string $value
     * @return \kendo\data\DataSourceAggregateItem
     */
    public function field($value)
    {
        return $this->setProperty('field', $value);
    }

    /**
     * Specifies the aggregate function. Possible values are: "min", "max", "count", "sum", "average"
     * @param string $value
     * @return \kendo\data\DataSourceAggregateItem
     */
    public function aggregate($value)
    {
        return $this->setProperty('aggregate', $value);
    }
}
