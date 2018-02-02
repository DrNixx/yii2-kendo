<?php
namespace yii2\kendo\ui;

use yii2\kendo\Html\Element;
use yii2\kendo\JavaScriptFunction;

class Editor extends Widget
{
    protected function name()
    {
        return 'Editor';
    }

    protected function createElement()
    {
        $element = new Element('textarea');

        $content = $this->getProperty('content');

        if (gettype($content) == "string") {
            $element->html($content);
        }

        return $element;
    }

    /**
     * Indicates whether the Editor should submit encoded HTML tags.
     * @param boolean $value
     * @return \yii2\kendo\ui\Editor
     */
    public function encoded($value)
    {
        return $this->setProperty('encoded', $value);
    }

    /**
     * Defines the text of the labels that are shown within the editor. Used primarily for localization.
     * @param  $value
     * @return \yii2\kendo\ui\Editor
     */
    public function messages($value)
    {
        return $this->setProperty('messages', $value);
    }

    /**
     * Allows custom stylesheets to be included within the editing area.
     * @param array $value
     * @return \yii2\kendo\ui\Editor
     */
    public function stylesheets($value)
    {
        return $this->setProperty('stylesheets', $value);
    }

    /**
     * Adds EditorTool to the Editor.
     * @param \yii2\kendo\ui\EditorTool|array,... $value one or more EditorTool to add.
     * @return \yii2\kendo\ui\Editor
     */
    public function addTool($value)
    {
        if (is_array($value)) {
            return $this->add('tools', $value);
        } else {
            return $this->add('tools', func_get_args());
        }
    }

    /**
     * Configuration for image browser dialog.
     * @param \yii2\kendo\ui\EditorImageBrowser|array $value
     * @return \yii2\kendo\ui\Editor
     */
    public function imageBrowser($value)
    {
        return $this->setProperty('imageBrowser', $value);
    }

    /**
     * Sets the change event of the Editor.
     * Fires when Editor is blurred and its content has changed.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\Editor
     */
    public function change($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
     * Sets the execute event of the Editor.
     * Fires when an Editor command is executed.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\Editor
     */
    public function execute($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('execute', $value);
    }

    /**
     * Sets the keydown event of the Editor.
     * Fires when the user depresses a keyboard key. Triggered multiple times if the user holds the key down.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\Editor
     */
    public function keydown($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('keydown', $value);
    }

    /**
     * Sets the keyup event of the Editor.
     * Fires when the user releases a keyboard key.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\Editor
     */
    public function keyup($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('keyup', $value);
    }

    /**
     * Sets the paste event of the Editor.
     * Fires before when content is pasted in the Editor.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\Editor
     */
    public function paste($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('paste', $value);
    }

    /**
     * Sets the select event of the Editor.
     * Fires when the Editor selection has changed.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\Editor
     */
    public function select($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }


    /**
     * Sets the HTML content of the Editor.
     * @param string $value
     * @return \yii2\kendo\ui\Editor
     */
    public function content($value)
    {
        return $this->setProperty('content', $value);
    }

    /**
     * Starts output bufferring. Any following markup will be set as the content of the Editor.
     */
    public function startContent()
    {
        ob_start();
    }

    /**
     * Stops output bufferring and sets the preceding markup as the content of the Editor.
     */
    public function endContent()
    {
        $this->content(ob_get_clean());
    }
}
