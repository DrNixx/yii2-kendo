<?php
namespace yii2\kendo\data;

use yii2\kendo\SerializableObject;

class DataSourceGroupItem extends SerializableObject
{
    /**
     * Specifies the field to group by.
     * @param string $value
     * @return \yii2\kendo\data\DataSourceGroupItem
     */
    public function field($value)
    {
        return $this->setProperty('field', $value);
    }

    /**
     * Specifies the order of the groupped items.
     * @param string $value
     * @return \yii2\kendo\data\DataSourceGroupItem
     */
    public function dir($value)
    {
        return $this->setProperty('dir', $value);
    }

    /**
     * Adds DataSourceGroupItemAggregate to the DataSourceGroupItem.
     * @param \yii2\kendo\data\DataSourceGroupItemAggregate|array,... $value one or more DataSourceGroupItemAggregate to add.
     * @return \yii2\kendo\data\DataSourceGroupItem
     */
    public function addAggregate($value)
    {
        return $this->add('aggregates', func_get_args());
    }
}
