<?php
namespace kendo\ui;

use kendo\SerializableObject;

class GridFilterableOperators extends SerializableObject
{
    /**
     * Enable/Disable and set the text of filter operators for fields of type string.
     * @param GridFilterableOperatorsString|array $value
     * @return GridFilterableOperators
     */
    public function string($value)
    {
        return $this->setProperty('string', $value);
    }

    /**
     * Enable/Disable and set the text of filter operators for fields of type number.
     * @param GridFilterableOperatorsNumber|array $value
     * @return GridFilterableOperators
     */
    public function number($value)
    {
        return $this->setProperty('number', $value);
    }

    /**
     * Enable/Disable and set the text of filter operators for fields of type date.
     * @param GridFilterableOperatorsDate|array $value
     * @return GridFilterableOperators
     */
    public function date($value)
    {
        return $this->setProperty('date', $value);
    }

    /**
     * Enable/Disable and set the text of filter operators for foreign key columns.
     * @param GridFilterableOperatorsEnums|array $value
     * @return GridFilterableOperators
     */
    public function enums($value)
    {
        return $this->setProperty('enums', $value);
    }
}
