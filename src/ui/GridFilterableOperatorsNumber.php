<?php
namespace kendo\ui;

use kendo\SerializableObject;

class GridFilterableOperatorsNumber extends SerializableObject
{
    /**
     * Enable/Disable and set the text of the "Is equal to" filter option for columns with number values.
     * @param string $value
     * @return \kendo\ui\GridFilterableOperatorsNumber
     */
    public function eq($value)
    {
        return $this->setProperty('eq', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is not equal to" filter option for columns with number values.
     * @param string $value
     * @return \kendo\ui\GridFilterableOperatorsNumber
     */
    public function neq($value)
    {
        return $this->setProperty('neq', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is greater than or equal to"
     * filter option for columns with number values.
     * @param string $value
     * @return \kendo\ui\GridFilterableOperatorsNumber
     */
    public function gte($value)
    {
        return $this->setProperty('gte', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is greater than" filter option for columns with number values.
     * @param string $value
     * @return \kendo\ui\GridFilterableOperatorsNumber
     */
    public function gt($value)
    {
        return $this->setProperty('gt', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is less than or equal to" filter option for columns with number values.
     * @param string $value
     * @return \kendo\ui\GridFilterableOperatorsNumber
     */
    public function lte($value)
    {
        return $this->setProperty('lte', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is less than" filter option for columns with number values.
     * @param string $value
     * @return \kendo\ui\GridFilterableOperatorsNumber
     */
    public function lt($value)
    {
        return $this->setProperty('lt', $value);
    }
}
