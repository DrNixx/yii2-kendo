<?php
namespace kendo\ui;

use kendo\SerializableObject;
use kendo\Template;

class GridEditable extends SerializableObject
{
    public function __construct($args = null)
    {
        $this->setProperty('confirmation', true);
    }

    /**
     * Defines the text that will be used in confirmation box when delete an item.
     * @param boolean|string $value
     * @return \kendo\ui\GridEditable
     */
    public function confirmation($value)
    {
        return $this->setProperty('confirmation', $value);
    }

    /**
     * Indicates whether the created record should be inserted at the top or at the bottom of the current page.
     * Available values are "top" and "bottom".
     * @param string $value
     * @return \kendo\ui\GridEditable
     */
    public function createAt($value)
    {
        return $this->setProperty('createAt', $value);
    }

    /**
     * Indicates whether item should be deleted when click on delete button.
     * @param boolean $value
     * @return \kendo\ui\GridEditable
     */
    public function destroy($value)
    {
        return $this->setProperty('destroy', $value);
    }

    /**
     * Indicates which of the available edit modes(incell(default)/inline/popup) will be used
     * @param string $value
     * @return \kendo\ui\GridEditable
     */
    public function mode($value)
    {
        return $this->setProperty('mode', $value);
    }

    /**
     * Sets the template option of the GridEditable.
     * Template which will be use during popup editing
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\ui\GridEditable
     */
    public function templateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the GridEditable.
     * Template which will be use during popup editing
     * @param string $value The template content.
     * @return \kendo\ui\GridEditable
     */
    public function template($value)
    {
        return $this->setProperty('template', $value);
    }

    /**
     * Indicates whether item should be switched to edit mode on click.
     * @param boolean $value
     * @return \kendo\ui\GridEditable
     */
    public function update($value)
    {
        return $this->setProperty('update', $value);
    }
}
