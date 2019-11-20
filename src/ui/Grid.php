<?php
namespace kendo\ui;

use kendo\assets\KendoGridAsset;
use kendo\data\DataSource;
use kendo\JavaScriptFunction;
use kendo\Template;
use yii\base\InvalidConfigException;

class Grid extends Widget
{
    protected function kendoName()
    {
        return 'Grid';
    }

    /**
     * Indicates whether the grid will call read on the DataSource initially.
     * @param boolean $value
     * @return Grid
     */
    public function autoBind($value)
    {
        return $this->setProperty('autoBind', $value);
    }

    /**
     * Adds GridColumn to the Grid.
     * @param GridColumn|array,... $value one or more GridColumn to add.
     * @return Grid
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
     * @param GridColumn|array,... $value one or more GridColumn to add.
     * @return Grid
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
     * @param boolean|GridColumnMenu|array $value
     * @return Grid
     */
    public function columnMenu($value)
    {
        return $this->setProperty('columnMenu', $value);
    }

    /**
     * Sets the data source of the Grid.
     * @param array|DataSource $value
     * @return Grid
     */
    public function dataSource($value)
    {
        return $this->setProperty('dataSource', $value);
    }

    /**
     * Indicates whether editing is enabled/disabled.
     * @param boolean|GridEditable|array $value
     * @return Grid
     */
    public function editable($value)
    {
        return $this->setProperty('editable', $value);
    }

    /**
     * Indicates whether filtering is enabled/disabled.
     * @param boolean|GridFilterable|array $value
     * @return Grid
     */
    public function filterable($value)
    {
        return $this->setProperty('filterable', $value);
    }

    /**
     * Indicates whether column reordering is enabled/disable.
     * @param boolean $value
     * @return Grid
     */
    public function reorderable($value)
    {
        return $this->setProperty('reorderable', $value);
    }

    /**
     * Indicates whether column resizing is enabled/disable.
     * @param boolean $value
     * @return Grid
     */
    public function resizable($value)
    {
        return $this->setProperty('resizable', $value);
    }

    /**
     * Indicates whether grouping is enabled/disabled.
     * @param boolean|GridGroupable|array $value
     * @return Grid
     */
    public function groupable($value)
    {
        return $this->setProperty('groupable', $value);
    }

    /**
     * Sets the height of the grid.
     * @param float|string $value
     * @return Grid
     */
    public function height($value)
    {
        return $this->setProperty('height', $value);
    }

    /**
     * Indicates whether keyboard navigation is enabled/disabled.
     * @param boolean $value
     * @return Grid
     */
    public function navigatable($value)
    {
        return $this->setProperty('navigatable', $value);
    }

    /**
     * Indicates whether paging is enabled/disabled.
     * @param boolean|GridPageable|array $value
     * @return Grid
     */
    public function pageable($value)
    {
        return $this->setProperty('pageable', $value);
    }

    /**
     * Enable/disable grid scrolling.
     * @param boolean|GridScrollable|array $value
     * @return Grid
     */
    public function scrollable($value)
    {
        return $this->setProperty('scrollable', $value);
    }

    /**
     * Indicates whether selection is enabled/disabled. Possible values:
     * @param string $value
     * @return Grid
     */
    public function selectable($value)
    {
        return $this->setProperty('selectable', $value);
    }

    /**
     * Defines whether grid columns are sortable.
     * @param boolean|GridSortable|array $value
     * @return Grid
     */
    public function sortable($value)
    {
        return $this->setProperty('sortable', $value);
    }

    /**
     * Adds GridToolbarItem to the Grid.
     * @param GridToolbarItem|array,... $value one or more GridToolbarItem to add.
     * @return Grid
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
     * @return Grid
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
     * @return Grid
     */
    public function detailTemplate($value)
    {
        return $this->setProperty('detailTemplate', $value);
    }

    /**
     * Sets the rowTemplate option of the Grid.
     * The id of the template used for rendering the rows in the grid.
     * @param string $value The id of the element which represents the kendo template.
     * @return Grid
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
     * @return Grid
     */
    public function rowTemplate($value)
    {
        return $this->setProperty('rowTemplate', $value);
    }

    /**
     * Sets the altRowTemplate option of the Grid.
     * The id of the template used for rendering the alternate rows in the grid.
     * @param string $value The id of the element which represents the kendo template.
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
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
     * @return Grid
     */
    public function toolbarTemplateId($value)
    {
        $value = new Template($value);
        return $this->setProperty('toolbar', $value);
    }

    /**
     * @throws InvalidConfigException
     */
    protected function registerAssets()
    {
        parent::registerAssets();
        $this->getView()->registerAssetBundle(KendoGridAsset::class);
    }
}
