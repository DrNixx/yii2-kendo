<?php
namespace kendo\data;

use kendo\SerializableObject;

class DataSourceSchemaModel extends SerializableObject
{
    /**
     * @param $value
     * @return DataSourceSchemaModel
     */
    public function id($value)
    {
        return $this->setProperty('id', $value);
    }

    /**
     * @param $value
     * @return DataSourceSchemaModel
     */
    public function addField($value)
    {
        return $this->add('fields', func_get_args());
    }

    /**
     * @param $items
     * @return DataSourceSchemaModel
     */
    public function fields($items)
    {
        if (is_array($items)) {
            foreach ($items as $item) {
                if ($item instanceof DataSourceSchemaModelField) {
                    $this->addField($item);
                } else {
                    $this->addField(DataSourceSchemaModelField::make($item));
                }
            }

            return $this;
        } else {
            return $this->addField($items);
        }
    }
}
