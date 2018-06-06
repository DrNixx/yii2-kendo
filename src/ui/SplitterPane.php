<?php
namespace kendo\ui;

use kendo\Html\Element;
use kendo\SerializableObject;

class SplitterPane extends SerializableObject
{
    protected $ignore = array('content');

    private $attributes = array();

    /**
     * @param string $key
     * @param $value
     * @return $this
     */
    public function attr($key, $value)
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    /**
     * @param Element $element
     */
    protected function addAttributes(Element $element)
    {
        foreach ($this->attributes as $key => $value) {
            $element->attr($key, $value);
        }
    }

    /**
     * @return Element
     */
    public function createElement()
    {
        $element = new Element('div');

        $this->addAttributes($element);

        $content = $this->getProperty('content');

        if (gettype($content) == "string") {
            $element->html($content);
        }

        return $element;
    }

   /**
     * Specifies whether a pane is initially collapsed (true) or expanded (true).
    *
     * @param boolean $value
    *
     * @return $this
     */
    public function collapsed($value)
    {
        return $this->setProperty('collapsed', $value);
    }

    /**
     * Specifies whether a pane is collapsible (true) or not collapsible (false).
     *
     * @param boolean $value
     *
     * @return $this
     */
    public function collapsible($value)
    {
        return $this->setProperty('collapsible', $value);
    }

    /**
     * Specifies the URL from which to load the content of a pane.
     *
     * @param string $value
     *
     * @return $this
     */
    public function contentUrl($value)
    {
        return $this->setProperty('contentUrl', $value);
    }

    /**
     * Specifies the maximum size of a pane defined as pixels (i.e. "200px") or as
     * a percentage (i.e. "50%"). The size of a resized pane cannot exceed the defined maximum size.
     *
     * @param string $value
     *
     * @return $this
     */
    public function max($value)
    {
        return $this->setProperty('max', $value);
    }

    /**
     * Specifies the minimum size of a pane defined as pixels (i.e. "200px") or as
     * a percentage (i.e. "50%"). The size of a resized pane cannot be less than the defined minimum size.
     *
     * @param string $value
     *
     * @return $this
     */
    public function min($value)
    {
        return $this->setProperty('min', $value);
    }

    /**
     * Specifies whether a pane is resizable (true) or not resizable (false).
     *
     * @param boolean $value
     *
     * @return $this
     */
    public function resizable($value)
    {
        return $this->setProperty('resizable', $value);
    }

    /**
     * Specifies whether a pane is scrollable (true) or not scrollable (false).
     *
     * @param boolean $value
     *
     * @return $this
     */
    public function scrollable($value)
    {
        return $this->setProperty('scrollable', $value);
    }

    /**
     * Specifies the size of a pane defined as pixels (i.e. "200px") or as
     * a percentage (i.e. "50%"). This value must not exceed panes.max or be less then panes.min.
     *
     * @param string $value
     *
     * @return $this
     */
    public function size($value)
    {
        return $this->setProperty('size', $value);
    }

    /**
     * Sets the HTML content of the SplitterPane.
     *
     * @param string $value
     *
     * @return $this
     */
    public function content($value)
    {
        return $this->setProperty('content', $value);
    }

    /**
     * Starts output bufferring. Any following markup will be set as the content of the SplitterPane.
     */
    public function startContent()
    {
        ob_start();
    }

    /**
     * Stops output bufferring and sets the preceding markup as the content of the SplitterPane.
     */
    public function endContent()
    {
        $this->content(ob_get_clean());
    }
}
