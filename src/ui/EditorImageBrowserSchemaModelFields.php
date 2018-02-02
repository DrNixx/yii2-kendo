<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class EditorImageBrowserSchemaModelFields extends SerializableObject
{
    /**
     * The field which contains the name of the image/directory
     * @param string|\yii2\kendo\ui\EditorImageBrowserSchemaModelFieldsName|array $value
     * @return \yii2\kendo\ui\EditorImageBrowserSchemaModelFields
     */
    public function name($value)
    {
        return $this->setProperty('name', $value);
    }

    /**
     * The field which contains the type of the entry. Either f for image or d for directory.
     * @param string|\yii2\kendo\ui\EditorImageBrowserSchemaModelFieldsType|array $value
     * @return \yii2\kendo\ui\EditorImageBrowserSchemaModelFields
     */
    public function type($value)
    {
        return $this->setProperty('type', $value);
    }

    /**
     * The field which contains the size of image.
     * @param string|\yii2\kendo\ui\EditorImageBrowserSchemaModelFieldsSize|array $value
     * @return \yii2\kendo\ui\EditorImageBrowserSchemaModelFields
     */
    public function size($value)
    {
        return $this->setProperty('size', $value);
    }
}
