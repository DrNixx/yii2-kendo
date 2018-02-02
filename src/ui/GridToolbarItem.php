<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;
use yii2\kendo\Template;

class GridToolbarItem extends SerializableObject
{
    public static function make($args = null)
    {
        if (is_array($args)) {
            $name = array_shift($args);
            $obj = new static($name);
            foreach ($args as $key => $value) {
                $obj->$key($value);
            }

            return $obj;
        } else {
            return new static($args);
        }
    }

    public function __construct($name = null)
    {
        $this->name($name);
    }

    /**
     * The name of the command. One of the predefined or a custom.
     * @param string $value
     * @return \yii2\kendo\ui\GridToolbarItem
     */
    public function name($value)
    {
        return $this->setProperty('name', $value);
    }

    /**
     * Sets the template option of the GridToolbarItem.
     * The template for the command button.
     * @param string $value The id of the element which represents the kendo template.
     * @return \yii2\kendo\ui\GridToolbarItem
     */
    public function templateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the GridToolbarItem.
     * The template for the command button.
     * @param string $value The template content.
     * @return \yii2\kendo\ui\GridToolbarItem
     */
    public function template($value)
    {
        return $this->setProperty('template', $value);
    }

    /**
     * The text of the command that will be set on the button.
     * @param string $value
     * @return \yii2\kendo\ui\GridToolbarItem
     */
    public function text($value)
    {
        return $this->setProperty('text', $value);
    }
}
