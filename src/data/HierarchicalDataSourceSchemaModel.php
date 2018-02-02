<?php
namespace yii2\kendo\data;

class HierarchicalDataSourceSchemaModel extends DataSourceSchemaModel
{

    /**
     * Sets the hasChildren property
     * @param boolean|string $value
     * @return \yii2\kendo\data\HierarchicalDataSourceSchemaModel
     */
    public function hasChildren($value)
    {
        return $this->setProperty('hasChildren', $value);
    }

    /**
     * Sets the hasChildren property
     * @param mixed|string $value
     * @return \yii2\kendo\data\HierarchicalDataSourceSchemaModel
     */
    public function children($value)
    {
        return $this->setProperty('children', $value);
    }
}
