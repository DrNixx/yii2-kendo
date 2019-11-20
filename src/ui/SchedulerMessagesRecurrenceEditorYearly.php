<?php /** @noinspection PhpUnused */
namespace kendo\ui;

use kendo\SerializableObject;

class SchedulerMessagesRecurrenceEditorYearly extends SerializableObject
{
    /**
     * The text similar to " of " displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorYearly
     */
    public function of($value) {
        return $this->setProperty('of', $value);
    }

    /**
     * The text similar to "Repeat every: " displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorYearly
     */
    public function repeatEvery($value) {
        return $this->setProperty('repeatEvery', $value);
    }

    /**
     * The text similar to "Repeat on: " displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorYearly
     */
    public function repeatOn($value) {
        return $this->setProperty('repeatOn', $value);
    }

    /**
     * The text similar to " year(s)" displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorYearly
     */
    public function interval($value) {
        return $this->setProperty('interval', $value);
    }
}
