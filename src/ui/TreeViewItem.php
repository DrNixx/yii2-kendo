<?php

namespace kendo\ui;

class TreeViewItem extends NavigationalItem
{
    function __construct($text = null)
    {
        parent::__construct();
        $this->text($text);
    }

    public function __set($name, $value)
    {
        $this->setProperty($name, $value);
    }


    /**
     * Specifies the text displayed by the item
     * @param string $value
     * @return TreeViewItem
     */
    public function text($value)
    {
        return $this->setProperty('text', $value);
    }

    /**
     * Specifies the URL of the image displayed by the item
     * @param string $value
     * @return TreeViewItem
     */
    public function imageUrl($value)
    {
        return $this->setProperty('imageUrl', $value);
    }

    /**
     * Specifies the class name for the sprite image displayed by the item
     * @param string $value
     * @return TreeViewItem
     */
    public function spriteCssClass($value)
    {
        return $this->setProperty('spriteCssClass', $value);
    }

    /**
     * Specifies whether the item is initially enabled
     * @param boolean $value
     * @return TreeViewItem
     */
    public function enabled($value)
    {
        return $this->setProperty('enabled', $value);
    }

    /**
     * Specifies whether the item is initially selected
     * @param boolean $value
     * @return TreeViewItem
     */
    public function selected($value)
    {
        return $this->setProperty('selected', $value);
    }

    /**
     * Specifies whether the item is initially expanded
     * @param boolean $value
     * @return TreeViewItem
     */
    public function expanded($value)
    {
        return $this->setProperty('expanded', $value);
    }

    /**
     * Sets the HTML content of the TreeViewItem.
     * @param string $value
     * @return TreeViewItem
     */
    public function content($value)
    {
        return $this->setProperty('content', $value);
    }

    /**
     * Starts output bufferring. Any following markup will be set as the content of the TreeViewItem.
     */
    public function startContent()
    {
        ob_start();
    }

    /**
     * Stops output bufferring and sets the preceding markup as the content of the TreeViewItem.
     */
    public function endContent()
    {
        $this->content(ob_get_clean());
    }
    /**
     * Adds one or more \kendo\ui\TreeViewItem.
     * @param TreeViewItem|array,... $value
     * @return TreeViewItem
     */
    public function addItem($value)
    {
        return $this->add('items', func_get_args());
    }
}
