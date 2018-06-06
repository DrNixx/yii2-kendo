<?php

namespace kendo\ui;

use kendo\SerializableObject;

class GridGroupable extends SerializableObject {

    /**
     * Sets the messages displayed during grouping.
     * @param \kendo\ui\GridGroupableMessages|array $value
     * @return \kendo\ui\GridGroupable
     */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

}
