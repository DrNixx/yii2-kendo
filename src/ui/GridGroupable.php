<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class GridGroupable extends SerializableObject {

    /**
     * Sets the messages displayed during grouping.
     * @param \yii2\kendo\ui\GridGroupableMessages|array $value
     * @return \yii2\kendo\ui\GridGroupable
     */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

}
