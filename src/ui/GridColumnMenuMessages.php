<?php

namespace kendo\ui;

use kendo\SerializableObject;

class GridColumnMenuMessages extends SerializableObject {

    /**
     * Set the text of the columns section in column header menu.
     * @param string $value
     * @return \kendo\ui\GridColumnMenuMessages
     */
    public function columns($value) {
        return $this->setProperty('columns', $value);
    }

    /**
     * Set the text of the filter section in column header menu.
     * @param string $value
     * @return \kendo\ui\GridColumnMenuMessages
     */
    public function filter($value) {
        return $this->setProperty('filter', $value);
    }

    /**
     * Set the text of the sortAscending section in column header menu.
     * @param string $value
     * @return \kendo\ui\GridColumnMenuMessages
     */
    public function sortAscending($value) {
        return $this->setProperty('sortAscending', $value);
    }

    /**
     * Set the text of the sortDescending section in column header menu.
     * @param string $value
     * @return \kendo\ui\GridColumnMenuMessages
     */
    public function sortDescending($value) {
        return $this->setProperty('sortDescending', $value);
    }

}
