<?php /** @noinspection PhpUnused */
namespace kendo\ui;

use kendo\SerializableObject;

class SchedulerToolbarItem extends SerializableObject
{
    function __construct($name = null) {
        parent::__construct();
        $this->name($name);
    }

    /**
     * The name of the command.
     *
     * @param string $value
     *
     * @return SchedulerToolbarItem
     */
    public function name($value) {
        return $this->setProperty('name', $value);
    }
}
