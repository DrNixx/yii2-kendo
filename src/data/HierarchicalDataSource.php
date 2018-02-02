<?php
namespace yii2\kendo\data;

class HierarchicalDataSource extends DataSource
{
    /**
     * Set the object responsible for describing the raw data format.
     *
     * @param HierarchicalDataSourceSchema|array $value
     *
     * @return $this|DataSource
     */
    public function schema($value)
    {
        if (is_array($value)) {
            return $this->setProperty('schema', HierarchicalDataSourceSchema::make($value));
        } else {
            return parent::schema($value);
        }
    }
}
