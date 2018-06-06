<?php
namespace kendo;

trait SerializableTrait
{
    private $properties = [];

    protected $ignore = [];

    public function toJSON()
    {
        $serializer = new Serializer();
        return $serializer->serialize($this);
    }

    public function getProperties()
    {
        $properties = [];

        foreach ($this->properties as $key => $value) {
            if (!in_array($key, $this->ignore)) {
                if ($value instanceof Serializable) {
                    $value = $value->getProperties();
                }

                $properties[$key] = $value;
            }
        }

        return $properties;
    }

    protected function getProperty($key)
    {
        if (array_key_exists($key, $this->properties)) {
            return $this->properties[$key];
        }

        return null;
    }

    protected function add($key, $items)
    {
        $values = [];

        if (array_key_exists($key, $this->properties)) {
            $values = $this->properties[$key];
        }

        foreach ($items as $item) {
            $values[] = $item;
        }

        $this->properties[$key] = $values;

        return $this;
    }

    /**
     * Set object property
     *
     * @param string $key   property key
     * @param mixed  $value property value
     *
     * @return static
     */
    protected function setProperty($key, $value)
    {
        if ($value instanceof Serializable) {
            $value = $value->getProperties();
        }

        $this->properties[$key] = $value;

        return $this;
    }
}
