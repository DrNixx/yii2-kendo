<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class GridGroupableMessages extends SerializableObject
{

    /**
     * Sets the text of the empty grouping area message
     * @param string $value
     * @return \yii2\kendo\ui\GridGroupableMessages
     */
    public function _empty($value)
    {
        return $this->setProperty('empty', $value);
    }

}
