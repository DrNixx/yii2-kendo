<?php
namespace yii2\kendo\data;

class HierarchicalDataSourceSchema extends DataSourceSchema
{
    /**
     * @param DataSourceSchemaModel|array $value
     * @return $this|DataSourceSchema
     */
    public function model($value)
    {
        if (is_array($value)) {
            return $this->setProperty('model', HierarchicalDataSourceSchemaModel::make($value));
        } else {
            return parent::model($value);
        }
    }
}
