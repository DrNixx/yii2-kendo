<?php
namespace yii2\kendo\data;

use yii2\kendo\SerializableObject;

class DataSourceSchemaModelField extends SerializableObject
{
    public static function make($args = null)
    {
        if (is_array($args)) {
            $field = array_shift($args);
            $obj = new static($field);
            foreach ($args as $key => $value) {
                $obj->$key($value);
            }

            return $obj;
        } else {
            return new static($args);
        }
    }

    public function __construct($field)
    {
        $this->field($field);
        $this->from($field);
    }

    public function field($value)
    {
        return $this->setProperty('field', $value);
    }

    public function from($value)
    {
        return $this->setProperty('from', $value);
    }

    public function type($value)
    {
        return $this->setProperty('type', $value);
    }

    public function validation($value)
    {
        return $this->setProperty('validation', $value);
    }

    public function editable($value)
    {
        return $this->setProperty('editable', $value);
    }

    public function nullable($value)
    {
        return $this->setProperty('nullable', $value);
    }

    public function defaultValue($value)
    {
        return $this->setProperty('defaultValue', $value);
    }
}
