<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class GridSortable extends SerializableObject
{
    /**
     * Defines whether column can have unsorted state.
     * @param boolean $value
     * @return \yii2\kendo\ui\GridSortable
     */
    public function allowUnsort($value)
    {
        return $this->setProperty('allowUnsort', $value);
    }

    /**
     * Defines sorting mode. Possible values:
     * @param string $value
     * @return \yii2\kendo\ui\GridSortable
     */
    public function mode($value)
    {
        return $this->setProperty('mode', $value);
    }
}
