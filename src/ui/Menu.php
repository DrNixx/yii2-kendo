<?php
namespace kendo\ui;

use kendo\html\Element;
use kendo\JavaScriptFunction;

class Menu extends Widget
{
    protected $ignore = array('items');

    protected function kendoName()
    {
        return 'Menu';
    }

    protected function createElement()
    {
        $items = $this->getProperty('items');

        if ($items) {
            $element = new Element('ul');

            /** @var MenuItem $item */
            foreach ($items as $item) {
                $element->append($item->createElement());
            }
        } else {
            $element = new Element('div');
        }

        return $element;
    }

    /**
     * Sets the data of the Menu.
     * @param array $value
     * @return Menu
     */
    public function dataSource(array $value)
    {
        return $this->setProperty('dataSource', $value);
    }



    /**
     * A collection of Animation objects, used to change default animations.
     * A value of false will disable all animations in the widget.Available animations
     * for the Menu are listed below. Each animation has a reverse options which is used for
     * the close effect by default, but can be over-ridden by setting the close animation.
     * Each animation also has a direction which can be set off the animation (i.e. slideIn:Down).
     *
     * @param MenuAnimation|array $value
     *
     * @return Menu
     */
    public function animation($value)
    {
        return $this->setProperty('animation', $value);
    }

    /**
     * Specifies that sub menus should close after item selection (provided they won't navigate).
     * @param boolean $value
     * @return Menu
     */
    public function closeOnClick($value)
    {
        return $this->setProperty('closeOnClick', $value);
    }

    /**
     * Specifies Menu opening direction. Can be "top", "bottom", "left", "right".
     * You can also specify different direction for root and sub menu items, separating them with space.
     * The example below will initialize the root menu to open upwards and its sub menus to the left.
     *
     * @param string $value
     *
     * @return Menu
     */
    public function direction($value)
    {
        return $this->setProperty('direction', $value);
    }

    /**
     * Specifies the delay in ms before the menu is opened/closed - used to avoid accidental closure on leaving.
     * @param float $value
     * @return Menu
     */
    public function hoverDelay($value)
    {
        return $this->setProperty('hoverDelay', $value);
    }

    /**
     * Specifies that the root sub menus will be opened on item click.
     * @param boolean $value
     * @return Menu
     */
    public function openOnClick($value)
    {
        return $this->setProperty('openOnClick', $value);
    }

    /**
     * Root menu orientation. Could be horizontal or vertical.
     * @param string $value
     * @return Menu
     */
    public function orientation($value)
    {
        return $this->setProperty('orientation', $value);
    }

    /**
     * Specifies how Menu should adjust to screen boundaries.
     * By default the strategy is "fit" for a sub menu with a horizontal parent, meaning it will
     * move to fit in screen boundaries in all directions, and "fit flip" for a sub menu with vertical
     * parent, meaning it will fit vertically and flip over its parent horizontally.
     * You can also switch off the screen boundary detection completely if you set the popupCollision to false.
     *
     * @param string $value
     *
     * @return Menu
     */
    public function popupCollision($value)
    {
        return $this->setProperty('popupCollision', $value);
    }

    /**
     * Adds MenuItem to the Menu.
     * @param MenuItem|array,... $value one or more MenuItem to add.
     * @return Menu
     */
    public function addItem($value)
    {
        return $this->add('items', func_get_args());
    }

    /**
     * Sets the close event of the Menu.
     * Fires after a sub menu gets closed.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return Menu
     */
    public function close($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
     * Sets the open event of the Menu.
     * Fires before a sub menu gets opened.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return Menu
     */
    public function open($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }

    /**
     * Sets the activate event of the Menu.
     * Fires when a sub menu gets opened and its animation finished.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return Menu
     */
    public function activate($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('activate', $value);
    }

    /**
     * Sets the deactivate event of the Menu.
     * Fires when a sub menu gets closed and its animation finished.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return Menu
     */
    public function deactivate($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('deactivate', $value);
    }

    /**
     * Sets the select event of the Menu.
     * Fires when a menu item gets selected.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return Menu
     */
    public function select($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }
}
