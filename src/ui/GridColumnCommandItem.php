<?php
namespace kendo\ui;

use kendo\JavaScriptFunction;
use kendo\SerializableObject;

class GridColumnCommandItem extends SerializableObject
{
    /**
     * The unique name of the command.
     * The supported built-in commands are: "create", "cancel", "save", "destroy".
     * @param string $value
     * @return GridColumnCommandItem
     */
    public function name($value)
    {
        return $this->setProperty('name', $value);
    }

    /**
     * The text displayed by the command.
     * @param string $value
     * @return GridColumnCommandItem
     */
    public function text($value)
    {
        return $this->setProperty('text', $value);
    }

    /**
     * The CSS class of the command.
     * @param string $value
     * @return GridColumnCommandItem
     */
    public function className($value)
    {
        return $this->setProperty('className', $value);
    }

    /**
     * Sets the click option of the GridColumnCommandItem.
     * The JavaScript function executed when the user clicks the command button.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return GridColumnCommandItem
     */
    public function click($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('click', $value);
    }
}
