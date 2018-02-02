<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class GridFilterableOperatorsString extends SerializableObject
{
    /**
     * Enable/Disable and set the text of the "Is equal to" filter option for columns with string values.
     * @param string $value
     * @return \yii2\kendo\ui\GridFilterableOperatorsString
     */
    public function eq($value)
    {
        return $this->setProperty('eq', $value);
    }

    /**
     * Enable/Disable and set the text of the "Is not equal to" filter option for columns with string values.
     * @param string $value
     * @return \yii2\kendo\ui\GridFilterableOperatorsString
     */
    public function neq($value)
    {
        return $this->setProperty('neq', $value);
    }

    /**
     * Enable/Disable and set the text of the "Starts with" filter option for columns with string values.
     * @param string $value
     * @return \yii2\kendo\ui\GridFilterableOperatorsString
     */
    public function startswith($value)
    {
        return $this->setProperty('startswith', $value);
    }

    /**
     * Enable/Disable and set the text of the "Contains" filter option for columns with string values.
     * @param string $value
     * @return \yii2\kendo\ui\GridFilterableOperatorsString
     */
    public function contains($value)
    {
        return $this->setProperty('contains', $value);
    }

    /**
     * Enable/Disable and set the text of the "Does not contain" filter option for columns with string values.
     * @param string $value
     * @return \yii2\kendo\ui\GridFilterableOperatorsString
     */
    public function doesnotcontain($value)
    {
        return $this->setProperty('doesnotcontain', $value);
    }

    /**
     * Enable/Disable and set the text of the "Ends with" filter option for columns with string values.
     * @param string $value
     * @return \yii2\kendo\ui\GridFilterableOperatorsString
     */
    public function endswith($value)
    {
        return $this->setProperty('endswith', $value);
    }
}
