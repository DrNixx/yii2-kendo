<?php
namespace kendo;

abstract class SerializableObject implements Serializable
{
    use SerializableTrait;

    public static function make($args = null)
    {
        return new static($args);
    }

    public function __construct($args = null)
    {
        if (is_array($args)) {
            foreach ($args as $key => $value) {
                $this->$key($value);
            }
        }
    }
}
