<?php
namespace kendo\ui;

use kendo\JavaScriptFunction;
use kendo\SerializableObject;
use kendo\Template;

class EditorTool extends SerializableObject
{
    /**
     * The mandatory name of the tool. The built-in tools are "bold", "italic", "underline", "strikethrough",
     * "fontName", "fontSize", "foreColor", "backColor", "justifyLeft", "justifyCenter",
     * "justifyRight", "justifyFull", "insertUnorderedList", "insertOrderedList", "indent",
     * "outdent", "formatBlock", "createLink", "unlink", "insertImage", "insertHtml", "viewHtml".
     * @param string $value
     * @return EditorTool
     */
    public function name($value)
    {
        return $this->setProperty('name', $value);
    }

    /**
     * The text which will be displayed when the end-user hovers the tool button with the mouse.
     * @param string $value
     * @return EditorTool
     */
    public function tooltip($value)
    {
        return $this->setProperty('tooltip', $value);
    }

    /**
     * Sets the exec option of the EditorTool.
     * The JavaScript function which will be executed when the end-user clicks the tool button.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return EditorTool
     */
    public function exec($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('exec', $value);
    }

    /**
     * Adds EditorToolItem to the EditorTool.
     * @param EditorToolItem|array,... $value one or more EditorToolItem to add.
     * @return EditorTool
     */
    public function addItem($value)
    {
        return $this->add('items', func_get_args());
    }

    /**
     * Sets the template option of the EditorTool.
     * The kendo template that will be used for rendering the given tool.
     * @param string $value The id of the element which represents the kendo template.
     * @return EditorTool
     */
    public function templateId($value)
    {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the EditorTool.
     * The kendo template that will be used for rendering the given tool.
     * @param string $value The template content.
     * @return EditorTool
     */
    public function template($value)
    {
        return $this->setProperty('template', $value);
    }

}
