<?php /** @noinspection PhpUnused */
namespace kendo\ui;

use kendo\SerializableObject;

class SchedulerMessagesRecurrenceEditor extends SerializableObject
{
    /**
     * The configuration of the scheduler recurrence editor daily messages.
     * Use this option to customize or localize the scheduler recurrence editor daily messages.
     *
     * @param SchedulerMessagesRecurrenceEditorDaily|array $value
     *
     * @return SchedulerMessagesRecurrenceEditor
     */
    public function daily($value) {
        return $this->setProperty('daily', $value);
    }

    /**
     * The configuration of the scheduler recurrence editor end messages.
     * Use this option to customize or localize the scheduler recurrence editor end messages.
     *
     * @param SchedulerMessagesRecurrenceEditorEnd|array $value
     *
     * @return SchedulerMessagesRecurrenceEditor
     */
    public function end($value) {
        return $this->setProperty('end', $value);
    }

    /**
     * The configuration of the scheduler recurrence editor frequencies messages.
     * Use this option to customize or localize the scheduler recurrence editor frequencies messages.
     *
     * @param SchedulerMessagesRecurrenceEditorFrequencies|array $value
     *
     * @return SchedulerMessagesRecurrenceEditor
     */
    public function frequencies($value) {
        return $this->setProperty('frequencies', $value);
    }

    /**
     * The configuration of the scheduler recurrence editor monthly messages.
     * Use this option to customize or localize the scheduler recurrence editor monthly messages.
     *
     * @param SchedulerMessagesRecurrenceEditorMonthly|array $value
     *
     * @return SchedulerMessagesRecurrenceEditor
     */
    public function monthly($value) {
        return $this->setProperty('monthly', $value);
    }

    /**
     * The configuration of the scheduler recurrence editor offsetPositions messages.
     * Use this option to customize or localize the scheduler recurrence editor offsetPositions messages.
     *
     * @param SchedulerMessagesRecurrenceEditorOffsetPositions|array $value
     *
     * @return SchedulerMessagesRecurrenceEditor
     */
    public function offsetPositions($value) {
        return $this->setProperty('offsetPositions', $value);
    }

    /**
     * The text of the Recurence editor dropdown title.
     *
     * @param string $value
     *
     * @return SchedulerMessagesRecurrenceEditor
     */
    public function recurrenceEditorTitle($value) {
        return $this->setProperty('recurrenceEditorTitle', $value);
    }

    /**
     * The configuration of the scheduler recurrence editor weekly messages.
     * Use this option to customize or localize the scheduler recurrence editor weekly messages.
     *
     * @param SchedulerMessagesRecurrenceEditorWeekly|array $value
     *
     * @return SchedulerMessagesRecurrenceEditor
     */
    public function weekly($value) {
        return $this->setProperty('weekly', $value);
    }

    /**
     * The configuration of the scheduler recurrence editor week days messages.
     * Use these options to customize or localize the scheduler recurrence editor weekdays messages.
     *
     * @param SchedulerMessagesRecurrenceEditorWeekdays|array $value
     *
     * @return SchedulerMessagesRecurrenceEditor
     */
    public function weekdays($value) {
        return $this->setProperty('weekdays', $value);
    }

    /**
     * The configuration of the scheduler recurrence editor yearly messages.
     * Use this option to customize or localize the scheduler recurrence editor yearly messages.
     *
     * @param SchedulerMessagesRecurrenceEditorYearly|array $value
     *
     * @return SchedulerMessagesRecurrenceEditor
     */
    public function yearly($value) {
        return $this->setProperty('yearly', $value);
    }
}
