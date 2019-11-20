<?php
namespace kendo\ui;

use kendo\SerializableObject;

class EditorImageBrowserSchemaModel extends SerializableObject
{
    /**
     * The name of the field which acts as an identifier.
     * @param string $value
     * @return EditorImageBrowserSchemaModel
     */
    public function id($value)
    {
        return $this->setProperty('id', $value);
    }

    /**
     *
     * @param EditorImageBrowserSchemaModelFields|array $value
     * @return EditorImageBrowserSchemaModel
     */
    public function fields($value)
    {
        return $this->setProperty('fields', $value);
    }
}
