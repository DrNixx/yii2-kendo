<?php
namespace kendo\ui;

use kendo\SerializableObject;

class CalendarMonth extends SerializableObject
{
    /**
     * Template to be used for rendering the cells in the "month" view, which are in range.
     * @param string $value
     * @return CalendarMonth
     */
    public function content($value)
    {
        return $this->setProperty('content', $value);
    }

    /**
     * Template to be used for rendering the cells in the "month" view, which are not in the min/max range.
     * @param string $value
     * @return CalendarMonth
     */
    public function _empty($value)
    {
        return $this->setProperty('empty', $value);
    }
}
