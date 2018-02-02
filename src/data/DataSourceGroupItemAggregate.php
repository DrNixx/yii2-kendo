<?php
namespace yii2\kendo\data;

use yii2\kendo\SerializableObject;

class DataSourceGroupItemAggregate extends SerializableObject
{
    /**
     * Specifies the field on which the aggregate will be calculated.
     * @param string $value
     * @return \yii2\kendo\data\DataSourceGroupItemAggregate
     */
    public function field($value)
    {
        return $this->setProperty('field', $value);
    }

    /**
     * Specifies the aggregate function. Possible values are: "min", "max", "count", "sum", "average"
     * @param string $value
     * @return \yii2\kendo\data\DataSourceGroupItemAggregate
     */
    public function aggregate($value)
    {
        return $this->setProperty('aggregate', $value);
    }
}
