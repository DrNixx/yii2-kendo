<?php
namespace kendo\ui;

use kendo\SerializableObject;

class GridFilterableOperatorsDate extends SerializableObject
{
    /**
     * Enable/Disable and set the text of the "Is equal to" filter option for columns with date values.
     * @param string $value
     * @return GridFilterableOperatorsDate
     */
    public function eq($value)
    {
        return $this->setProperty('eq', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is not equal to" filter option for columns with date values.
     * @param string $value
     * @return GridFilterableOperatorsDate
     */
    public function neq($value)
    {
        return $this->setProperty('neq', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is after or equal to" filter option for columns with date values.
     * @param string $value
     * @return GridFilterableOperatorsDate
     */
    public function gte($value)
    {
        return $this->setProperty('gte', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is after" filter option for columns with date values.
     * @param string $value
     * @return GridFilterableOperatorsDate
     */
    public function gt($value)
    {
        return $this->setProperty('gt', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is before or equal to" filter option for columns with date values.
     * @param string $value
     * @return GridFilterableOperatorsDate
     */
    public function lte($value)
    {
        return $this->setProperty('lte', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is before" filter option for columns with date values.
     * @param string $value
     * @return GridFilterableOperatorsDate
     */
    public function lt($value)
    {
        return $this->setProperty('lt', $value);
    }
}
