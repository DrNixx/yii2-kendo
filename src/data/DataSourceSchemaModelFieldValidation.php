<?php
namespace yii2\kendo\data;

use yii2\kendo\SerializableObject;

class DataSourceSchemaModelFieldValidation extends SerializableObject
{

    public function required($value)
    {
        return $this->setProperty('required', $value);
    }

    public function min($value)
    {
        return $this->setProperty('min', $value);
    }

    public function max($value)
    {
        return $this->setProperty('max', $value);
    }
}
