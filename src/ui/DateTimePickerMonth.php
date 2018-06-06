<?php
namespace kendo\ui;

use kendo\SerializableObject;

class DateTimePickerMonth extends SerializableObject
{
    /**
     * Template to be used for rendering the cells in the calendar "month" view, which are in range.
     *
     * @param string $value
     *
     * @return $this
     */
    public function content($value)
    {
        return $this->setProperty('content', $value);
    }

    /**
     * The template used for rendering the cells in the calendar "month" view,
     * which are not in the range between the minimum and maximum values.
     *
     * @param string $value
     *
     * @return $this
     */
    public function emptyValue($value)
    {
        return $this->setProperty('empty', $value);
    }
}
