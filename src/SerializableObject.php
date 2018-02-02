<?php
namespace yii2\kendo;

abstract class SerializableObject implements Serializable
{
    private $properties = array();

    protected $ignore = array();

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

    public function toJSON()
    {
        $serializer = new Serializer();
        return $serializer->serialize($this);
    }

    public function properties()
    {
        $properties = array();

        foreach ($this->properties as $key => $value) {
            if (!in_array($key, $this->ignore)) {
                if ($value instanceof Serializable) {
                    $value = $value->properties();
                }

                $properties[$key] = $value;
            }
        }

        return $properties;
    }

    protected function add($key, $items)
    {
        $values = array();

        if (array_key_exists($key, $this->properties)) {
            $values = $this->properties[$key];
        }

        foreach ($items as $item) {
            $values[] = $item;
        }

        $this->properties[$key] = $values;

        return $this;
    }

    protected function getProperty($key)
    {
        if (array_key_exists($key, $this->properties)) {
            return $this->properties[$key];
        }

        return null;
    }

    /**
     * @param string $key
     *
     * @param mixed $value
     *
     * @return $this
     */
    protected function setProperty($key, $value)
    {
        if ($value instanceof Serializable) {
            $value = $value->properties();
        }

        $this->properties[$key] = $value;

        return $this;
    }
}
