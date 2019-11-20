<?php /** @noinspection PhpUnused */
namespace kendo\ui;

use kendo\SerializableObject;

class SchedulerCurrentTimeMarker extends SerializableObject
{
    /**
     * The update interval of the "current time" marker, in milliseconds.
     *
     * @param float $value
     *
     * @return SchedulerCurrentTimeMarker
     */
    public function updateInterval($value) {
        return $this->setProperty('updateInterval', $value);
    }

    /**
     * If set to false the "current time" marker would be displayed using the scheduler timezone.
     *
     * @param boolean $value
     *
     * @return SchedulerCurrentTimeMarker
     */
    public function useLocalTimezone($value) {
        return $this->setProperty('useLocalTimezone', $value);
    }
}
