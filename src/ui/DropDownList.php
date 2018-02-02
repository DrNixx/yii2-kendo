<?php
namespace yii2\kendo\ui;

use yii2\kendo\Html\Element;
use yii2\kendo\JavaScriptFunction;
use yii2\kendo\Template;

class DropDownList extends Widget
{
    protected function name()
    {
        return 'DropDownList';
    }

    protected function createElement()
    {
        return new Element('input', true);
    }

    /**
     * Animations to be used for opening/closing the popup. Setting to false will turn of the animation.
     * @param \yii2\kendo\ui\DropDownListAnimation|array $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function animation($value)
    {
        return $this->setProperty('animation', $value);
    }

    /**
     * Controls whether to bind the widget on initialization.
     * @param boolean $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function autoBind($value)
    {
        return $this->setProperty('autoBind', $value);
    }

    /**
     * Use it to set the Id of the parent DropDownList.
     * @param string $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function cascadeFrom($value)
    {
        return $this->setProperty('cascadeFrom', $value);
    }

    /**
     * Sets the data source of the DropDownList.
     * @param array|\yii2\kendo\data\DataSource $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function dataSource($value)
    {
        return $this->setProperty('dataSource', $value);
    }

    /**
     * Sets the field of the data item that provides the text content of the list items.
     * @param string $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function dataTextField($value)
    {
        return $this->setProperty('dataTextField', $value);
    }

    /**
     * Sets the field of the data item that provides the value content of the list items.
     * @param string $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function dataValueField($value)
    {
        return $this->setProperty('dataValueField', $value);
    }

    /**
     * Specifies the delay in ms before the search text typed by the end user is cleared.
     * @param float $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function delay($value)
    {
        return $this->setProperty('delay', $value);
    }

    /**
     * The minimum number of characters the user must type before a filter is performed.
     * Set to higher value than 1 if the search could match a lot of items.
     * @param int $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function minLength($value)
    {
        return $this->setProperty('minLength', $value);
    }

    /**
     * The filtering method used to determine the suggestions for the current value.
     * Filtration is turned off by default. The supported filter values are startswith, endswith and contains.
     * @param string $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function filter($value)
    {
        return $this->setProperty('filter', $value);
    }

    /**
     * Controls whether the DropDownList should be initially enabled.
     * @param boolean $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function enable($value)
    {
        return $this->setProperty('enable', $value);
    }

    /**
     * Define the height of the drop-down list in pixels.
     * @param float $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function height($value)
    {
        return $this->setProperty('height', $value);
    }

    /**
     * Controls whether the search should be case sensitive.
     * @param string $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function ignoreCase($value)
    {
        return $this->setProperty('ignoreCase', $value);
    }

    /**
     * Defines the initial selected item.
     * @param float $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function index($value)
    {
        return $this->setProperty('index', $value);
    }

    /**
     * Define the text of the default empty item. If the value is an object, then the widget will use it directly.
     * Note that object should have atleast the dataValueField and dataTextField properties.
     * Otherwise, widget will show undefined.
     * @param string| $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function optionLabel($value)
    {
        return $this->setProperty('optionLabel', $value);
    }

    /**
     * Sets the template option of the DropDownList.
     * Template to be used for rendering the items in the list.
     * @param string $value The id of the element which represents the kendo template.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function templateId($value)
    {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the DropDownList.
     * Template to be used for rendering the items in the list.
     * @param string $value The template content.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function template($value)
    {
        return $this->setProperty('template', $value);
    }

    /**
     * Specifies a id template element, which will be rendered as a header of the popup element.
     * @param string $value The template content.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function headerTemplateId($value)
    {
        return $this->setProperty('headerTemplate', $value);
    }

    /**
     * Specifies a static HTML content, which will be rendered as a header of the popup element.
     * @param string $value The template content.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function headerTemplate($value)
    {
        return $this->setProperty('headerTemplate', $value);
    }

    /**
     * The valueTemplate used to render the selected value.
     * By default the widget displays only the text of the data item (configured via dataTextField).
     * @param string $value The template content.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function valueTemplateId($value)
    {
        return $this->setProperty('valueTemplate', $value);
    }

    /**
     * The valueTemplate used to render the selected value.
     * By default the widget displays only the text of the data item (configured via dataTextField).
     * @param string $value The template content.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function valueTemplate($value)
    {
        return $this->setProperty('valueTemplate', $value);
    }

    /**
     * Define the text of the widget, when the autoBind is set to false.
     * @param string $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function text($value)
    {
        return $this->setProperty('text', $value);
    }

    /**
     * Define the value of the widget
     * @param string $value
     * @return \yii2\kendo\ui\DropDownList
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
    }

    /**
     * Sets the change event of the DropDownList.
     * Fires when the value has been changed.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function change($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
     * Sets the close event of the DropDownList.
     * Fires when the drop-down list is closed
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function close($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
     * Sets the dataBound event of the DropDownList.
     * Fires when the drop-down list has received data from the data source.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function dataBound($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dataBound', $value);
    }

    /**
     * Sets the open event of the DropDownList.
     * Fires when the drop-down list is opened
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function open($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }

    /**
     * Sets the select event of the DropDownList.
     * Triggered when a Li element is selected.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function select($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }

    /**
     * Sets the cascade event of the DropDownList.
     * Triggered when value of the widget is changed via API or user interaction.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\DropDownList
     */
    public function cascade($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('cascade', $value);
    }
}
