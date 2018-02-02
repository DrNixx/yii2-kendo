<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class GridFilterable extends SerializableObject
{
    /**
     * Indicates whether second filter input is enabled/disabled.
     * @param boolean $value
     * @return \yii2\kendo\ui\GridFilterable
     */
    public function extra($value)
    {
        return $this->setProperty('extra', $value);
    }

    /**
     * Sets the filter menu messages.
     * @param \yii2\kendo\ui\GridFilterableMessages|array $value
     * @return \yii2\kendo\ui\GridFilterable
     */
    public function messages($value)
    {
        return $this->setProperty('messages', $value);
    }

    /**
     * Enable/Disable and set the text of filter operators.
     * @param \yii2\kendo\ui\GridFilterableOperators|array $value
     * @return \yii2\kendo\ui\GridFilterable
     */
    public function operators($value)
    {
        return $this->setProperty('operators', $value);
    }
}
