<?php
namespace yii2\kendo\ui;

use yii2\kendo\Html\Element;
use yii2\kendo\JavaScriptFunction;
use yii2\kendo\Template;

class TreeView extends Widget
{
    protected $ignore = array('items');

    /**
     * @return string
     */
    protected function kendoName()
    {
        return 'TreeView';
    }

    /**
     * @return Element
     */
    protected function createElement()
    {
        $items = $this->getProperty('items');

        if ($items) {
            $element = new Element('ul');
            /** @var TreeViewItem $item */
            foreach ($items as $item) {
                $element->append($item->createElement());
            }
        } else {
            $element = new Element('div');
        }

        return $element;
    }


    /**
     * A collection of visual animations used when items are expanded or collapsed through user interaction.
     * Setting this option to false will disable all animations.
     *
     * @param TreeViewAnimation|array $value
     *
     * @return $this
     */
    public function animation($value)
    {
        return $this->setProperty('animation', $value);
    }

    /**
     * If true or an object, renders checkboxes within each treeview item.
     *
     * @param boolean|TreeViewCheckboxes|array $value
     *
     * @return $this
     */
    public function checkboxes($value)
    {
        return $this->setProperty('checkboxes', $value);
    }

    /**
     * Sets the field of the data item that provides the image URL of the treeview nodes.
     *
     * @param string $value
     *
     * @return $this
     */
    public function dataImageUrlField($value)
    {
        return $this->setProperty('dataImageUrlField', $value);
    }

    /**
     * Sets the data source of the TreeView.
     *
     * @param array|\yii2\kendo\data\HierarchicalDataSource $value
     *
     * @return $this
     */
    public function dataSource($value)
    {
        return $this->setProperty('dataSource', $value);
    }

    /**
     * Sets the field of the data item that provides the sprite CSS class of the treeview nodes.
     *
     * @param string $value
     *
     * @return $this
     */
    public function dataSpriteCssClassField($value)
    {
        return $this->setProperty('dataSpriteCssClassField', $value);
    }

    /**
     * Sets the field of the data item that provides the text content of the treeview nodes.
     * If an array, each level uses the field that is at the same index in the array, or the last item in the array.
     *
     * @param string|array $value
     *
     * @return $this
     */
    public function dataTextField($value)
    {
        return $this->setProperty('dataTextField', $value);
    }

    /**
     * Sets the field of the data item that provides
the link URL of the treeview nodes.
     * @param string $value
     * @return $this
     */
    public function dataUrlField($value)
    {
        return $this->setProperty('dataUrlField', $value);
    }

    /**
     * Disables (false) or enables (true) drag-and-drop on the nodes of a TreeView.
     *
     * @param boolean $value
     *
     * @return $this
     */
    public function dragAndDrop($value)
    {
        return $this->setProperty('dragAndDrop', $value);
    }

    /**
     * Indicates whether the child datasources should be fetched lazily, when parent groups get expanded.
     * Setting this to false causes all child dataSources to be loaded at initialization time.
     * Note: when initializing a TreeView from array (rather than from a HierarchicalDataSource instance),
     * the default value of this option is false.
     *
     * @param boolean $value
     *
     * @return $this
     */
    public function loadOnDemand($value)
    {
        return $this->setProperty('loadOnDemand', $value);
    }

    /**
     * Sets the template option of the TreeView.
     * Template for rendering of the nodes of the treeview.
     *
     * @param string $value The id of the element which represents the kendo template.
     *
     * @return $this
     */
    public function templateId($value)
    {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the TreeView.
     * Template for rendering of the nodes of the treeview.
     *
     * @param string $value The template content.
     *
     * @return $this
     */
    public function template($value)
    {
        return $this->setProperty('template', $value);
    }

    /**
     * Adds TreeViewItem to the TreeView.
     *
     * @param TreeViewItem|array,... $value one or more TreeViewItem to add.
     *
     * @return $this
     */
    public function addItem($value)
    {
        return $this->add('items', func_get_args());
    }

    /**
     * Sets the collapse event of the TreeView.
     * Triggered before a subgroup gets collapsed.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function collapse($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('collapse', $value);
    }

    /**
     * Sets the dataBound event of the TreeView.
     * Triggered after the dataSource change event has been processed (adding/removing items);
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function dataBound($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dataBound', $value);
    }

    /**
     * Sets the drag event of the TreeView.
     * Triggered while a node is being dragged.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function drag($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('drag', $value);
    }

    /**
     * Sets the dragend event of the TreeView.
     * Triggered after a node has been dropped.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function dragend($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dragend', $value);
    }

    /**
     * Sets the dragstart event of the TreeView.
     * Triggered before the dragging of a node starts.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function dragstart($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dragstart', $value);
    }

    /**
     * Sets the drop event of the TreeView.
     * Triggered when a node is being dropped.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function drop($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('drop', $value);
    }

    /**
     * Sets the expand event of the TreeView.
     * Triggered before a subgroup gets expanded.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function expand($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('expand', $value);
    }

    /**
     * Sets the change event of the TreeView.
     * Triggered when the selection has changed (either by the user or through the select method).
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function change($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
     * Sets the select event of the TreeView.
     * Triggered when a node is being selected by the user. Cancellable.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function select($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }

    /**
     * Sets the navigate event of the TreeView.
     * Triggered when the user moves the focus on another node
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function navigate($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('navigate', $value);
    }
}
