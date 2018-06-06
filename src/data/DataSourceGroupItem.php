<?php
namespace kendo\data;

use kendo\SerializableObject;

/**
 * Class DataSourceGroupItem
 *
 * @property string $field
 * @property string $dir
 */
class DataSourceGroupItem extends SerializableObject
{
    /**
     * Specifies the field to group by.
     *
     * @param string $value
     */
    public function setField($value)
    {
        $this->setProperty('field', $value);
    }

    /**
     * Specifies the order of the groupped items.
     *
     * @param string $value
     */
    public function setDir($value)
    {
        $this->setProperty('dir', $value);
    }

    /**
     * Adds DataSourceGroupItemAggregate to the DataSourceGroupItem.
     * @param DataSourceGroupItemAggregate|array,... $value one or more DataSourceGroupItemAggregate to add.
     * @return \kendo\data\DataSourceGroupItem
     */
    public function addAggregate($value)
    {
        return $this->add('aggregates', func_get_args());
    }
}
