<?php
namespace yii2\kendo\ui;

use yii2\kendo\JavaScriptFunction;
use yii2\kendo\SerializableObject;

class GridColumnFilterable extends SerializableObject {
    /**
     * Role of the widget shown as column filter menu input element.
     * @param string|JavaScriptFunction $value
     * @return \yii2\kendo\ui\GridColumnFilterable
     */
    public function ui($value)
    {
        return $this->setProperty('ui', $value);
    }
}
