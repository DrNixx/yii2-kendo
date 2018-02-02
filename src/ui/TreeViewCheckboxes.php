<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;
use yii2\kendo\Template;

class TreeViewCheckboxes extends SerializableObject {

    /**
     * Indicates the name of the checkbox inputs that will be posted to the server.
     * @param string $value
     * @return \yii2\kendo\ui\TreeViewCheckboxes
     */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
     * Indicates whether checkboxes of child items should get checked when the checkbox of a parent item is checked.
     * @param boolean $value
     * @return \yii2\kendo\ui\TreeViewCheckboxes
     */
    public function checkChildren($value) {
        return $this->setProperty('checkChildren', $value);
    }

    /**
     * Sets the template option of the TreeViewCheckboxes.
     * Template for the checkbox rendering. Used to set the  checkbox name attribute, or to add hidden inputs that will be posted along the checkboxes.
     * @param string $value The id of the element which represents the kendo template.
     * @return \yii2\kendo\ui\TreeViewCheckboxes
     */
    public function templateId($value) {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the TreeViewCheckboxes.
     * Template for the checkbox rendering. Used to set the  checkbox name attribute, or to add hidden inputs that will be posted along the checkboxes.
     * @param string $value The template content.
     * @return \yii2\kendo\ui\TreeViewCheckboxes
     */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

}
