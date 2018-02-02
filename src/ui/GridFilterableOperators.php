<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class GridFilterableOperators extends SerializableObject
{
    /**
     * Enable/Disable and set the text of filter operators for fields of type string.
     * @param \yii2\kendo\ui\GridFilterableOperatorsString|array $value
     * @return GridFilterableOperators
     */
    public function string($value)
    {
        return $this->setProperty('string', $value);
    }

    /**
     * Enable/Disable and set the text of filter operators for fields of type number.
     * @param \yii2\kendo\ui\GridFilterableOperatorsNumber|array $value
     * @return GridFilterableOperators
     */
    public function number($value)
    {
        return $this->setProperty('number', $value);
    }

    /**
     * Enable/Disable and set the text of filter operators for fields of type date.
     * @param \yii2\kendo\ui\GridFilterableOperatorsDate|array $value
     * @return GridFilterableOperators
     */
    public function date($value)
    {
        return $this->setProperty('date', $value);
    }

    /**
     * Enable/Disable and set the text of filter operators for foreign key columns.
     * @param \yii2\kendo\ui\GridFilterableOperatorsEnums|array $value
     * @return GridFilterableOperators
     */
    public function enums($value)
    {
        return $this->setProperty('enums', $value);
    }
}
