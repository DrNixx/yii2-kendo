<?php /** @noinspection PhpUnused */
namespace kendo\ui;

use kendo\SerializableObject;

class SchedulerMessagesRecurrenceEditorEnd extends SerializableObject
{
    /**
     * The text similar to "After " displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorEnd
     */
    public function after($value) {
        return $this->setProperty('after', $value);
    }

    /**
     * The text similar to " occurrence(s)" displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorEnd
     */
    public function occurrence($value) {
        return $this->setProperty('occurrence', $value);
    }

    /**
     * The text similar to "End:" displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorEnd
     */
    public function label($value) {
        return $this->setProperty('label', $value);
    }

    /**
     * The text similar to "Never" displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorEnd
     */
    public function never($value) {
        return $this->setProperty('never', $value);
    }

    /**
     * The text similar to "Ends" displayed in the adaptive version of the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorEnd
     */
    public function mobileLabel($value) {
        return $this->setProperty('mobileLabel', $value);
    }

    /**
     * The text similar to "On " displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorEnd
     */
    public function on($value) {
        return $this->setProperty('on', $value);
    }
}
