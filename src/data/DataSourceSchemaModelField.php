<?php
namespace kendo\data;

use kendo\SerializableObject;

class DataSourceSchemaModelField extends SerializableObject
{
    public static function make($args = null)
    {
        if (is_array($args)) {
            $keys = array_keys($args);

            if ($keys[0] === 0) {
                $field = array_shift($args);
            } else {
                // First element is 'field' => 'datatype'
                $field = $keys[0];
                $type = $args[$field];
                unset($args[$field]);

                $args['type'] = $type;
            }

            $obj = new static($field, $args);

            return $obj;
        } else {
            return new static($args);
        }
    }

    public function __construct($field, $args = [])
    {
        $this->field($field);
        $this->from($field);

        parent::__construct($args);
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
