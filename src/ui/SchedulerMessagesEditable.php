<?php /** @noinspection PhpUnused */
namespace kendo\ui;

use kendo\SerializableObject;

class SchedulerMessagesEditable extends SerializableObject
{
    /**
     * The text similar to "Are you sure you want to delete this event?" displayed in scheduler.
     *
     * @param string $value
     *
     * @return SchedulerMessagesEditable
     */
    public function confirmation($value) {
        return $this->setProperty('confirmation', $value);
    }
}
