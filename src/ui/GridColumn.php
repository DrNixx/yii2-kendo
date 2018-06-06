<?php
namespace kendo\ui;

use kendo\JavaScriptFunction;
use kendo\SerializableObject;
use kendo\Template;

class GridColumn extends SerializableObject
{
    /**
     * Definition of column cells' HTML attributes.
     * Reserved words in Javascript should be enclosed in quotation marks.
     * @param  $value
     * @return \kendo\ui\GridColumn
     */
    public function attributes($value)
    {
        return $this->setProperty('attributes', $value);
    }

    /**
     * Adds GridColumnCommandItem to the GridColumn.
     * @param \kendo\ui\GridColumnCommandItem|array,... $value one or more GridColumnCommandItem to add.
     * @return \kendo\ui\GridColumn
     */
    public function addCommandItem($value)
    {
        return $this->add('command', func_get_args());
    }

    /**
     * Adds GridColumn to the GridColumn.
     * @param \kendo\ui\GridColumn|array,... $value one or more GridColumn to add.
     * @return \kendo\ui\GridColumn
     */
    public function addColumn($value)
    {
        if (is_array($value)) {
            return $this->add('columns', $value);
        } else {
            return $this->add('columns', func_get_args());
        }
    }

    /**
     * Sets the editor option of the GridColumn.
     * Provides a way to specify custom editor for this column.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\GridColumn
     */
    public function editor($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('editor', $value);
    }

    /**
     * Specified whether the column content is escaped. Disable encoding if the data contains HTML markup.
     * @param boolean $value
     * @return \kendo\ui\GridColumn
     */
    public function encoded($value)
    {
        return $this->setProperty('encoded', $value);
    }

    /**
     * The field from the datasource that will be displayed in the column.
     * @param string $value
     * @return \kendo\ui\GridColumn
     */
    public function field($value)
    {
        return $this->setProperty('field', $value);
    }

    /**
     * Specifies whether given column is filterable.
     * @param boolean|\kendo\ui\GridColumnFilterable|array $value
     * @return \kendo\ui\GridColumn
     */
    public function filterable($value)
    {
        return $this->setProperty('filterable', $value);
    }

    /**
     * The format that will be applied on the column cells.
     * @param string $value
     * @return \kendo\ui\GridColumn
     */
    public function format($value)
    {
        return $this->setProperty('format', $value);
    }

    /**
     * Definition of column header cell's HTML attributes.
     * Reserved words in Javascript should be enclosed in quotation marks.
     * @param  $value
     * @return \kendo\ui\GridColumn
     */
    public function headerAttributes($value)
    {
        return $this->setProperty('headerAttributes', $value);
    }

    /**
     * Sets the headerTemplate option of the GridColumn.
     * The template for column's header cell.
     * If sorting is enabled, it will be wrapped in a <a class="k-link"> element, so the template
     * should consist of only inline elements in order to have valid HTML markup in the Grid.
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\ui\GridColumn
     */
    public function headerTemplateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('headerTemplate', $value);
    }

    /**
     * Sets the headerTemplate option of the GridColumn.
     * The template for column's header cell.
     * If sorting is enabled, it will be wrapped in a <a class="k-link"> element, so the template
     * should consist of only inline elements in order to have valid HTML markup in the Grid.
     * @param string $value The template content.
     * @return \kendo\ui\GridColumn
     */
    public function headerTemplate($value)
    {
        return $this->setProperty('headerTemplate', $value);
    }

    /**
     * Specifies whether given column is hidden.
     * @param boolean $value
     * @return \kendo\ui\GridColumn
     */
    public function hidden($value)
    {
        return $this->setProperty('hidden', $value);
    }

    /**
     * Specifies whether given column is sortable.
     * @param boolean $value
     * @return \kendo\ui\GridColumn
     */
    public function sortable($value)
    {
        return $this->setProperty('sortable', $value);
    }

    /**
     * Sets the template option of the GridColumn.
     * The template for column's cells.
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\ui\GridColumn
     */
    public function templateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the GridColumn.
     * The template for column's cells.
     * @param string $value The template content.
     * @return \kendo\ui\GridColumn
     */
    public function template($value)
    {
        return $this->setProperty('template', $value);
    }

    /**
     * The aggregates to be used when grouping is applied
     * @param array $value
     * @return \kendo\ui\GridColumn
     */
    public function aggregates($value)
    {
        return $this->setProperty('aggregates', $value);
    }

    /**
     * Sets the groupHeaderTemplate option of the GridColumn.
     * The template for group header item.
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\ui\GridColumn
     */
    public function groupHeaderTemplateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('groupHeaderTemplate', $value);
    }

    /**
     * Sets the groupHeaderTemplate option of the GridColumn.
     * The template for group header item.
     * @param string $value The template content.
     * @return \kendo\ui\GridColumn
     */
    public function groupHeaderTemplate($value)
    {
        return $this->setProperty('groupHeaderTemplate', $value);
    }

    /**
     * Sets the groupFooterTemplate option of the GridColumn.
     * The template for column's cell in group footer item.
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\ui\GridColumn
     */
    public function groupFooterTemplateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('groupFooterTemplate', $value);
    }

    /**
     * Sets the groupFooterTemplate option of the GridColumn.
     * The template for column's cell in group footer item.
     * @param string $value The template content.
     * @return \kendo\ui\GridColumn
     */
    public function groupFooterTemplate($value)
    {
        return $this->setProperty('groupFooterTemplate', $value);
    }

    /**
     * Sets the footerTemplate option of the GridColumn.
     * The template for column's cell in footer item.
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\ui\GridColumn
     */
    public function footerTemplateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('footerTemplate', $value);
    }

    /**
     * Sets the footerTemplate option of the GridColumn.
     * The template for column's cell in footer item.
     * @param string $value The template content.
     * @return \kendo\ui\GridColumn
     */
    public function footerTemplate($value)
    {
        return $this->setProperty('footerTemplate', $value);
    }

    /**
     * The text that will be displayed in the column header.
     * @param string $value
     * @return \kendo\ui\GridColumn
     */
    public function title($value)
    {
        return $this->setProperty('title', $value);
    }

    /**
     * The width of the column.
     * @param string $value
     * @return \kendo\ui\GridColumn
     */
    public function width($value)
    {
        return $this->setProperty('width', $value);
    }

    /**
     * An array of values that will be used in a foreign key column.
     * Each item in the array should have a text and value field.
     * @param array $value
     * @return \kendo\ui\GridColumn
     */
    public function values($value)
    {
        return $this->setProperty('values', $value);
    }

    /**
     * Indicates whether the column should be visible in column menu.
     * @param boolean $value
     * @return \kendo\ui\GridColumn
     */
    public function menu($value)
    {
        return $this->setProperty('menu', $value);
    }
}
