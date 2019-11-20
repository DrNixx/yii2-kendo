<?php
namespace kendo\ui;

use kendo\SerializableObject;

class GridFilterableOperatorsEnums extends SerializableObject
{
    /**
     * Enable/Disable and set the text of the "Is equal to" filter option for foreign key columns.
     * @param string $value
     * @return GridFilterableOperatorsEnums
     */
    public function eq($value)
    {
        return $this->setProperty('eq', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is not equal to" filter option for foreign key columns.
     * @param string $value
     * @return GridFilterableOperatorsEnums
     */
    public function neq($value)
    {
        return $this->setProperty('neq', $value);
    }
}
