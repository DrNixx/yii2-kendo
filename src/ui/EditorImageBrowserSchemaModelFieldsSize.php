<?php
namespace kendo\ui;

use kendo\JavaScriptFunction;
use kendo\SerializableObject;

class EditorImageBrowserSchemaModelFieldsSize extends SerializableObject
{
    /**
     * The name of the field.
     * @param string $value
     * @return EditorImageBrowserSchemaModelFieldsSize
     */
    public function field($value)
    {
        return $this->setProperty('field', $value);
    }

    /**
     * Sets the parse option of the EditorImageBrowserSchemaModelFieldsSize.
     * Specifies the function which will parse the field value. If not set default parsers will be used.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return EditorImageBrowserSchemaModelFieldsSize
     */
    public function parse($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('parse', $value);
    }
}
