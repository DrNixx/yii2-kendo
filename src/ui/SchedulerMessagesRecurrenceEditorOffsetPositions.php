<?php /** @noinspection PhpUnused */
namespace kendo\ui;

use kendo\SerializableObject;

class SchedulerMessagesRecurrenceEditorOffsetPositions extends SerializableObject
{
    /**
     * The text similar to "first" displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorOffsetPositions
     */
    public function first($value) {
        return $this->setProperty('first', $value);
    }

    /**
     * The text similar to "second" displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorOffsetPositions
     */
    public function second($value) {
        return $this->setProperty('second', $value);
    }

    /**
     * The text similar to "third" displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorOffsetPositions
     */
    public function third($value) {
        return $this->setProperty('third', $value);
    }

    /**
     * The text similar to "fourth" displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorOffsetPositions
     */
    public function fourth($value) {
        return $this->setProperty('fourth', $value);
    }

    /**
     * The text similar to "last" displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorOffsetPositions
     */
    public function last($value) {
        return $this->setProperty('last', $value);
    }
}
