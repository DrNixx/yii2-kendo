<?php
namespace kendo\data;

class HierarchicalDataSourceSchemaModel extends DataSourceSchemaModel
{

    /**
     * Sets the hasChildren property
     * @param boolean|string $value
     * @return \kendo\data\HierarchicalDataSourceSchemaModel
     */
    public function hasChildren($value)
    {
        return $this->setProperty('hasChildren', $value);
    }

    /**
     * Sets the hasChildren property
     * @param mixed|string $value
     * @return \kendo\data\HierarchicalDataSourceSchemaModel
     */
    public function children($value)
    {
        return $this->setProperty('children', $value);
    }
}
