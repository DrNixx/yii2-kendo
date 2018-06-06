<?php
namespace kendo\ui;

use kendo\Html\Element;
use kendo\Html\Text;
use kendo\SerializableObject;

class PanelBarItem extends SerializableObject 
{
    /**
     * PanelBarItem constructor.
     *
     * @param null $text
     */
    function __construct($text = null)
    {
        $this->text($text);
    }

    /**
     * @param Element $element
     */
    protected function createContentElement($element)
    {
        $content = $this->getProperty('content');
        $contentUrl = $this->getProperty('contentUrl');

        if ($content || $contentUrl) {
            $contentElement = new Element('div');

            $contentElement->html($content);

            $element->append($contentElement);
        }
    }

    /**
     * @param \kendo\html\Element $element
     */
    protected function createSubGroup($element)
    {
        $items = $this->getProperty('items');

        if ($items) {
            $itemContainer = new Element('ul');

            /** @var self $item */
            foreach ($items as $item) {
                $itemContainer->append($item->createElement());
            }

            $element->append($itemContainer);
        }
    }

    protected function createItem()
    {
        $element = new Element('li');

        if ($this->getProperty('expanded')) {
            $element->attr('class', 'k-state-active');
        }

        if ($this->getProperty('enabled') === false) {
            $element->attr('disabled', 'disabled');
        }

        $text = $this->getProperty('text');

        if ($text) {
            $element->append(new Text($text));
        }

        return $element;
    }

    public function createElement()
    {
        $item = $this->createItem();

        $this->createContentElement($item);

        $this->createSubGroup($item);

        return $item;
    }

    /**
     * Specifies the text displayed by the item
     * @param string $value
     * @return PanelBarItem
     */
    public function text($value)
    {
        return $this->setProperty('text', $value);
    }

    /**
     * Specifies the URL of the image displayed by the item
     * @param string $value
     * @return PanelBarItem
     */
    public function imageUrl($value)
    {
        return $this->setProperty('imageUrl', $value);
    }

    /**
     * Specifies the class name for the sprite image displayed by the item
     * @param string $value
     * @return PanelBarItem
     */
    public function spriteCssClass($value)
    {
        return $this->setProperty('spriteCssClass', $value);
    }

    /**
     * Specifies whether the item is initially enabled
     * @param boolean $value
     * @return PanelBarItem
     */
    public function enabled($value)
    {
        return $this->setProperty('enabled', $value);
    }

    /**
     * Specifies whether the item is initially selected
     * @param boolean $value
     * @return PanelBarItem
     */
    public function selected($value)
    {
        return $this->setProperty('selected', $value);
    }

    /**
     * Specifies whether the item is initially expanded
     * @param boolean $value
     * @return PanelBarItem
     */
    public function expanded($value)
    {
        return $this->setProperty('expanded', $value);
    }

    /**
     * Specifies the url from which the item content will be loaded
     * @param string $value
     * @return PanelBarItem
     */
    public function contentUrl($value)
    {
        return $this->setProperty('contentUrl', $value);
    }

    /**
     * Sets the HTML content of the PanelBarItem.
     * @param string $value
     * @return PanelBarItem
     */
    public function content($value)
    {
        return $this->setProperty('content', $value);
    }

    /**
     * Starts output bufferring. Any following markup will be set as the content of the PanelBarItem.
     */
    public function startContent()
    {
        ob_start();
    }

    /**
     * Stops output bufferring and sets the preceding markup as the content of the PanelBarItem.
     */
    public function endContent()
    {
        $this->content(ob_get_clean());
    }

    /**
     * Adds one or more \kendo\ui\PanelBarItem.
     *
     * @param PanelBarItem|array,... $value
     *
     * @return \kendo\ui\PanelBar    */
    public function addItem($value)
    {
        return $this->add('items', func_get_args());
    }
}
