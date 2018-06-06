<?php
namespace kendo\ui;

use kendo\Html\Element;
use kendo\Html\Text;
use kendo\SerializableObject;

abstract class NavigationalItem extends SerializableObject
{

    /**
     * @param Element $element
     */
    public function renderText($element)
    {
        $text = $this->getProperty('text');

        if ($text) {
            $element->append(new Text($text));
        }
    }

    /**
     * @param Element $element
     */
    public function renderSprite($element)
    {
        $spriteCssClass = $this->getProperty('spriteCssClass');

        if ($spriteCssClass) {
            $sprite = new Element('span');
            $sprite->attr('class', 'k-sprite ' . $spriteCssClass);
            $element->append($sprite);
        }
    }

    /**
     * @param Element $element
     */
    public function renderItems($element)
    {
        $items = $this->getProperty('items');

        if ($items) {
            $itemContainer = new Element('ul');


            /** @var NavigationalItem $item */
            foreach ($items as $item) {
                $itemContainer->append($item->createElement());
            }

            $element->append($itemContainer);
        }
    }

    /**
     * @return Element
     */
    public function createElement()
    {
        $element = new Element('li');
        if ($this->getProperty('expanded')) {
            $element->attr('data-expanded', 'true');
        }

        $this->renderSprite($element);
        $this->renderText($element);

        $this->renderItems($element);

        return $element;
    }
}
