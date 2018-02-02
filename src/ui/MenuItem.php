<?php
namespace yii2\kendo\ui;

use yii2\kendo\Html\Element;

class MenuItem extends NavigationalItem
{
    public function __construct($text = null)
    {
        $this->text($text);
    }

    /**
     * @param \yii2\kendo\html\Element $element
     */
    protected function renderContent($element)
    {
        $content = $this->getProperty('content');
        if ($content) {
            $subgroup = new Element('ul');
            $subitem = new Element('li');
            $subitem->html($content);
            $subgroup->append($subitem);
            $element->append($subgroup);
        }
    }

    public function createElement() {
        $element = parent::createElement();

        $enabled = $this->getProperty('enabled') !== false;

        if (!$enabled) {
            $element->attr('disabled', 'disabled');
        }

        $this->renderContent($element);

        return $element;
    }


    /**
     * Specifies the text displayed by the item
     * @param string $value
     * @return \yii2\kendo\ui\MenuItem
     */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
     * Specifies the URL of the image displayed by the item
     * @param string $value
     * @return \yii2\kendo\ui\MenuItem
     */
    public function imageUrl($value) {
        return $this->setProperty('imageUrl', $value);
    }

    /**
     * Specifies the class name for the sprite image displayed by the item
     * @param string $value
     * @return \yii2\kendo\ui\MenuItem
     */
    public function spriteCssClass($value) {
        return $this->setProperty('spriteCssClass', $value);
    }

    /**
     * Specifies whether the item is initially enabled
     * @param boolean $value
     * @return \yii2\kendo\ui\MenuItem
     */
    public function enabled($value) {
        return $this->setProperty('enabled', $value);
    }

    /**
     * Specifies whether the item is initially selected
     * @param boolean $value
     * @return \yii2\kendo\ui\MenuItem
     */
    public function selected($value) {
        return $this->setProperty('selected', $value);
    }

    /**
     * Sets the HTML content of the MenuItem.
     * @param string $value
     * @return \yii2\kendo\ui\MenuItem    */
    public function content($value) {
        return $this->setProperty('content', $value);
    }

    /**
     * Starts output bufferring. Any following markup will be set as the content of the MenuItem.
     */
    public function startContent() {
        ob_start();
    }

    /**
     * Stops output bufferring and sets the preceding markup as the content of the MenuItem.
     */
    public function endContent() {
        $this->content(ob_get_clean());
    }
    /**
     * Adds one or more \yii2\kendo\ui\MenuItem.
     * @param \yii2\kendo\ui\MenuItem|array,... $value
     * @return \yii2\kendo\ui\Menu    */
    public function addItem($value) {
        return $this->add('items', func_get_args());
    }
}
