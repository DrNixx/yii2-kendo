<?php
namespace kendo\ui;

use kendo\SerializableObject;

class EditorImageBrowserSchemaModelFields extends SerializableObject
{
    /**
     * The field which contains the name of the image/directory
     * @param string|EditorImageBrowserSchemaModelFieldsName|array $value
     * @return EditorImageBrowserSchemaModelFields
     */
    public function name($value)
    {
        return $this->setProperty('name', $value);
    }

    /**
     * The field which contains the type of the entry. Either f for image or d for directory.
     * @param string|EditorImageBrowserSchemaModelFieldsType|array $value
     * @return EditorImageBrowserSchemaModelFields
     */
    public function type($value)
    {
        return $this->setProperty('type', $value);
    }

    /**
     * The field which contains the size of image.
     * @param string|EditorImageBrowserSchemaModelFieldsSize|array $value
     * @return EditorImageBrowserSchemaModelFields
     */
    public function size($value)
    {
        return $this->setProperty('size', $value);
    }
}
