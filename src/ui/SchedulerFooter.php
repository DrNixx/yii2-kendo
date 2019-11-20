<?php /** @noinspection PhpUnused */
namespace kendo\ui;

use kendo\SerializableObject;

class SchedulerFooter extends SerializableObject
{
    /**
     * Sets the command which will be displayed in the scheduler footer.
     * Currently only "workDay" option is supported.
     * If the option is set to false, the "workDay" button will be removed from the footer.
     *
     * @param string|boolean $value
     *
     * @return SchedulerFooter
     */
    public function command($value) {
        return $this->setProperty('command', $value);
    }
}
