<?php
namespace kendo\ui;

use kendo\JavaScriptFunction;
use kendo\SerializableObject;

class GridColumnFilterable extends SerializableObject
{
    /**
     * Role of the widget shown as column filter menu input element.
     * @param string|JavaScriptFunction $value
     * @return GridColumnFilterable
     */
    public function ui($value)
    {
        return $this->setProperty('ui', $value);
    }
}
