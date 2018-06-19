<?php
namespace kendo\ui;

use kendo\assets\KendoGridAsset;
use kendo\JavaScriptFunction;
use kendo\Template;

class Grid extends Widget
{
    protected function kendoName()
    {
        return 'Grid';
    }

    /**
     * Indicates whether the grid will call read on the DataSource initially.
     * @param boolean $value
     * @return \kendo\ui\Grid
     */
    public function autoBind($value)
    {
        return $this->setProperty('autoBind', $value);
    }

    /**
     * Adds GridColumn to the Grid.
     * @param \kendo\ui\GridColumn|array,... $value one or more GridColumn to add.
     * @return \kendo\ui\Grid
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
     * Adds GridColumn to the Grid.
     * @param \kendo\ui\GridColumn|array,... $value one or more GridColumn to add.
     * @return \kendo\ui\Grid
     */
    public function columns($items)
    {
        if (is_array($items)) {
            foreach ($items as $item) {
                if ($item instanceof GridColumn) {
                    $this->addColumn($item);
                } else {
                    $this->addColumn(GridColumn::make($item));
                }
            }

            return $this;
        } else {
            return $this->addColumn($items);
        }
    }

    /**
     * Enables column header menu
     * @param boolean|\kendo\ui\GridColumnMenu|array $value
     * @return \kendo\ui\Grid
     */
    public function columnMenu($value)
    {
        return $this->setProperty('columnMenu', $value);
    }

    /**
     * Sets the data source of the Grid.
     * @param array|\kendo\data\DataSource $value
     * @return \kendo\ui\Grid
     */
    public function dataSource($value)
    {
        return $this->setProperty('dataSource', $value);
    }

    /**
     * Indicates whether editing is enabled/disabled.
     * @param boolean|\kendo\ui\GridEditable|array $value
     * @return \kendo\ui\Grid
     */
    public function editable($value)
    {
        return $this->setProperty('editable', $value);
    }

    /**
     * Indicates whether filtering is enabled/disabled.
     * @param boolean|\kendo\ui\GridFilterable|array $value
     * @return \kendo\ui\Grid
     */
    public function filterable($value)
    {
        return $this->setProperty('filterable', $value);
    }

    /**
     * Indicates whether column reordering is enabled/disable.
     * @param boolean $value
     * @return \kendo\ui\Grid
     */
    public function reorderable($value)
    {
        return $this->setProperty('reorderable', $value);
    }

    /**
     * Indicates whether column resizing is enabled/disable.
     * @param boolean $value
     * @return \kendo\ui\Grid
     */
    public function resizable($value)
    {
        return $this->setProperty('resizable', $value);
    }

    /**
     * Indicates whether grouping is enabled/disabled.
     * @param boolean|\kendo\ui\GridGroupable|array $value
     * @return \kendo\ui\Grid
     */
    public function groupable($value)
    {
        return $this->setProperty('groupable', $value);
    }

    /**
     * Sets the height of the grid.
     * @param float|string $value
     * @return \kendo\ui\Grid
     */
    public function height($value)
    {
        return $this->setProperty('height', $value);
    }

    /**
     * Indicates whether keyboard navigation is enabled/disabled.
     * @param boolean $value
     * @return \kendo\ui\Grid
     */
    public function navigatable($value)
    {
        return $this->setProperty('navigatable', $value);
    }

    /**
     * Indicates whether paging is enabled/disabled.
     * @param boolean|\kendo\ui\GridPageable|array $value
     * @return \kendo\ui\Grid
     */
    public function pageable($value)
    {
        return $this->setProperty('pageable', $value);
    }

    /**
     * Enable/disable grid scrolling.
     * @param boolean|\kendo\ui\GridScrollable|array $value
     * @return \kendo\ui\Grid
     */
    public function scrollable($value)
    {
        return $this->setProperty('scrollable', $value);
    }

    /**
     * Indicates whether selection is enabled/disabled. Possible values:
     * @param string $value
     * @return \kendo\ui\Grid
     */
    public function selectable($value)
    {
        return $this->setProperty('selectable', $value);
    }

    /**
     * Defines whether grid columns are sortable.
     * @param boolean|\kendo\ui\GridSortable|array $value
     * @return \kendo\ui\Grid
     */
    public function sortable($value)
    {
        return $this->setProperty('sortable', $value);
    }

    /**
     * Adds GridToolbarItem to the Grid.
     * @param \kendo\ui\GridToolbarItem|array,... $value one or more GridToolbarItem to add.
     * @return \kendo\ui\Grid
     */
    public function addToolbarItem($value)
    {
        if (is_array($value)) {
            return $this->add('toolbar', $value);
        } else {
            return $this->add('toolbar', func_get_args());
        }
    }

    /**
     * Sets the detailTemplate option of the Grid.
     * The id of the template used for rendering the detail rows in the grid.
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\ui\Grid
     */
    public function detailTemplateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('detailTemplate', $value);
    }

    /**
     * Sets the detailTemplate option of the Grid.
     * The id of the template used for rendering the detail rows in the grid.
     * @param string $value The template content.
     * @return \kendo\ui\Grid
     */
    public function detailTemplate($value)
    {
        return $this->setProperty('detailTemplate', $value);
    }

    /**
     * Sets the rowTemplate option of the Grid.
     * The id of the template used for rendering the rows in the grid.
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\ui\Grid
     */
    public function rowTemplateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('rowTemplate', $value);
    }

    /**
     * Sets the rowTemplate option of the Grid.
     * The id of the template used for rendering the rows in the grid.
     * @param string $value The template content.
     * @return \kendo\ui\Grid
     */
    public function rowTemplate($value)
    {
        return $this->setProperty('rowTemplate', $value);
    }

    /**
     * Sets the altRowTemplate option of the Grid.
     * The id of the template used for rendering the alternate rows in the grid.
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\ui\Grid
     */
    public function altRowTemplateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('altRowTemplate', $value);
    }

    /**
     * Sets the altRowTemplate option of the Grid.
     * The id of the template used for rendering the alternate rows in the grid.
     * @param string $value The template content.
     * @return \kendo\ui\Grid
     */
    public function altRowTemplate($value)
    {
        return $this->setProperty('altRowTemplate', $value);
    }

    /**
     * Sets the cancel event of the Grid.
     * Raised when the user clicks the "cancel" button (in inline or popup editing mode) or
     * closes the popup window (popup editing mode).
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function cancel($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('cancel', $value);
    }

    /**
     * Sets the change event of the Grid.
     * Fires when the grid selection has changed.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function change($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
     * Sets the columnHide event of the Grid.
     * Fires when the user hides a column.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function columnHide($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('columnHide', $value);
    }

    /**
     * Sets the columnReorder event of the Grid.
     * Fires when the user changes the order of a column.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function columnReorder($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('columnReorder', $value);
    }

    /**
     * Sets the columnResize event of the Grid.
     * Fires when the user resizes a column.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function columnResize($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('columnResize', $value);
    }

    /**
     * Sets the columnShow event of the Grid.
     * Fires when a column is shown.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function columnShow($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('columnShow', $value);
    }

    /**
     * Sets the dataBound event of the Grid.
     * Fires when the grid has received data from the data source.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function dataBound($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dataBound', $value);
    }

    /**
     * Sets the dataBinding event of the Grid.
     * Fires when the grid is about to be rendered.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function dataBinding($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dataBinding', $value);
    }

    /**
     * Sets the detailCollapse event of the Grid.
     * Fires when the grid detail row is collapsed.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function detailCollapse($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('detailCollapse', $value);
    }

    /**
     * Sets the detailExpand event of the Grid.
     * Fires when the grid detail row is expanded.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function detailExpand($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('detailExpand', $value);
    }

    /**
     * Sets the detailInit event of the Grid.
     * Fires when the grid detail is initialized.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function detailInit($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('detailInit', $value);
    }

    /**
     * Sets the edit event of the Grid.
     * Fires when the grid enters edit mode.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function edit($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('edit', $value);
    }

    /**
     * Sets the filterMenuInit event of the Grid.
     * Fires when the grid column filter menu is initialized.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function filterMenuInit($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('filterMenuInit', $value);
    }

    /**
     * Sets the columnMenuInit event of the Grid.
     * Fires when the grid column menu is initialized.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function columnMenuInit($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('columnMenuInit', $value);
    }

    /**
     * Sets the remove event of the Grid.
     * Fires before the grid item is removed.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function remove($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('remove', $value);
    }

    /**
     * Sets the save event of the Grid.
     * Fires before the grid item is changed.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function save($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('save', $value);
    }

    /**
     * Sets the saveChanges event of the Grid.
     * Fires before the grid calls DataSource sync.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\ui\Grid
     */
    public function saveChanges($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('saveChanges', $value);
    }

    /**
     * Sets the toolbar option of the Grid.
     * The id of the template used for rendering the toolbar in the grid.
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\ui\Grid
     */
    public function toolbarTemplateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('toolbar', $value);
    }

    /**
     * @throws \yii\base\InvalidConfigException
     */
    protected function registerAssets()
    {
        parent::registerAssets();
        $this->getView()->registerAssetBundle(KendoGridAsset::class);
    }
}
