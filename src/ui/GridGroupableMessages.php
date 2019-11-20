<?php
namespace kendo\ui;

use kendo\SerializableObject;

class GridGroupableMessages extends SerializableObject
{

    /**
     * Sets the text of the empty grouping area message
     * @param string $value
     * @return GridGroupableMessages
     */
    public function _empty($value)
    {
        return $this->setProperty('empty', $value);
    }
}
