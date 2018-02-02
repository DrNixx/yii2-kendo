<?php
namespace yii2\kendo\ui;

use yii2\kendo\JavaScriptFunction;
use yii2\kendo\SerializableObject;

class GridColumnCommandItem extends SerializableObject
{
    /**
     * The unique name of the command.
     * The supported built-in commands are: "create", "cancel", "save", "destroy".
     * @param string $value
     * @return \yii2\kendo\ui\GridColumnCommandItem
     */
    public function name($value)
    {
        return $this->setProperty('name', $value);
    }

    /**
     * The text displayed by the command.
     * @param string $value
     * @return \yii2\kendo\ui\GridColumnCommandItem
     */
    public function text($value)
    {
        return $this->setProperty('text', $value);
    }

    /**
     * The CSS class of the command.
     * @param string $value
     * @return \yii2\kendo\ui\GridColumnCommandItem
     */
    public function className($value)
    {
        return $this->setProperty('className', $value);
    }

    /**
     * Sets the click option of the GridColumnCommandItem.
     * The JavaScript function executed when the user clicks the command button.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\GridColumnCommandItem
     */
    public function click($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('click', $value);
    }
}
