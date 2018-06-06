<?php
namespace kendo\ui;

use kendo\SerializableObject;

class EditorImageBrowserSchemaModel extends SerializableObject
{
    /**
     * The name of the field which acts as an identifier.
     * @param string $value
     * @return \kendo\ui\EditorImageBrowserSchemaModel
     */
    public function id($value)
    {
        return $this->setProperty('id', $value);
    }

    /**
     *
     * @param \kendo\ui\EditorImageBrowserSchemaModelFields|array $value
     * @return \kendo\ui\EditorImageBrowserSchemaModel
     */
    public function fields($value)
    {
        return $this->setProperty('fields', $value);
    }
}
