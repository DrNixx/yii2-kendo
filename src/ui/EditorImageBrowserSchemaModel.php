<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class EditorImageBrowserSchemaModel extends SerializableObject
{
    /**
     * The name of the field which acts as an identifier.
     * @param string $value
     * @return \yii2\kendo\ui\EditorImageBrowserSchemaModel
     */
    public function id($value)
    {
        return $this->setProperty('id', $value);
    }

    /**
     *
     * @param \yii2\kendo\ui\EditorImageBrowserSchemaModelFields|array $value
     * @return \yii2\kendo\ui\EditorImageBrowserSchemaModel
     */
    public function fields($value)
    {
        return $this->setProperty('fields', $value);
    }
}
