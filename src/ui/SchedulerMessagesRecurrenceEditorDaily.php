<?php /** @noinspection PhpUnused */
namespace kendo\ui;

use kendo\SerializableObject;

class SchedulerMessagesRecurrenceEditorDaily extends SerializableObject
{
    /**
     * The text similar to " day(s)" displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorDaily
     */
    public function interval($value) {
        return $this->setProperty('interval', $value);
    }

    /**
     * The text similar to "Repeat every: " displayed in the scheduler recurrence editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditorDaily
     */
    public function repeatEvery($value) {
        return $this->setProperty('repeatEvery', $value);
    }
}
