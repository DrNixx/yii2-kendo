<?php
namespace kendo;

abstract class SerializableObject implements Serializable
{
    use SerializableTrait;

    public static function make($args = null)
    {
        if (is_array($args)) {
            $obj = new static();
            foreach ($args as $key => $value) {
                $obj->$key($value);
            }

            return $obj;
        } else {
            return new static($args);
        }
    }

    public function __construct($args = null)
    {
    }
}
