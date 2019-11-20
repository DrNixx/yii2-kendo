<?php /** @noinspection PhpUnused */
namespace kendo\ui;

use kendo\SerializableObject;

class SchedulerMessagesRecurrenceMessages extends SerializableObject
{
    /**
     * The text similar to "Do you want to delete only this event occurrence or the whole series?" displayed
     * in the scheduler event editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceMessages
     */
    public function deleteRecurring($value) {
        return $this->setProperty('deleteRecurring', $value);
    }

    /**
     * The text similar to "Delete current occurrence" displayed in the scheduler event editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceMessages
     */
    public function deleteWindowOccurrence($value) {
        return $this->setProperty('deleteWindowOccurrence', $value);
    }

    /**
     * The text similar to "Delete the series" displayed in the scheduler event editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceMessages
     */
    public function deleteWindowSeries($value) {
        return $this->setProperty('deleteWindowSeries', $value);
    }

    /**
     * The text similar to "Delete Recurring Item" displayed in the scheduler event editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceMessages
     */
    public function deleteWindowTitle($value) {
        return $this->setProperty('deleteWindowTitle', $value);
    }

    /**
     * The text similar to "Do you want to edit only this event occurrence or the whole series?" displayed in
     * the scheduler event editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceMessages
     */
    public function editRecurring($value) {
        return $this->setProperty('editRecurring', $value);
    }

    /**
     * The text similar to "Edit current occurrence" displayed in the scheduler event editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceMessages
     */
    public function editWindowOccurrence($value) {
        return $this->setProperty('editWindowOccurrence', $value);
    }

    /**
     * The text similar to "Edit the series" displayed in the scheduler event editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceMessages
     */
    public function editWindowSeries($value) {
        return $this->setProperty('editWindowSeries', $value);
    }

    /**
     * The text similar to "Edit Recurring Item" displayed in the scheduler event editor.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceMessages
     */
    public function editWindowTitle($value) {
        return $this->setProperty('editWindowTitle', $value);
    }

    /**
     * The title of the prompt dialog opened to confirm the resetting of a series event.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceMessages
     */
    public function resetSeriesWindowTitle($value) {
        return $this->setProperty('resetSeriesWindowTitle', $value);
    }
}
