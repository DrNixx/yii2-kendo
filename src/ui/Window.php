<?php

namespace kendo\ui;

use kendo\html\Element;
use kendo\JavaScriptFunction;

class Window extends Widget
{
    protected $ignore = array('content');

    protected function kendoName()
    {
        return 'Window';
    }

    protected function createElement()
    {
        $element = new Element('div');

        $content = $this->getProperty('content');

        if (gettype($content) == "string") {
            $element->html($content);
        } else {
            // serialize content by removing it from the ignore list
            $this->ignore = array_diff(array('content'), $this->ignore);
        }

        return $element;
    }

    /**
     * The buttons for interacting with the window.
     * Predefined array values are "Close", "Refresh", "Minimize", and "Maximize".
     *
     * @param array $value
     *
     * @return Window
     */
    public function actions($value)
    {
        return $this->setProperty('actions', $value);
    }

    /**
     * A collection of {Animation} objects, used to change default animations.
     * A value of false will disable all animations in the widget.
     *
     * @param WindowAnimation|array $value
     *
     * @return Window
     */
    public function animation($value)
    {
        return $this->setProperty('animation', $value);
    }

    /**
     * The element that the Window will be appended to.
     * Note that this does not constrain the window dragging within the given element.
     *
     * @param |string $value
     *
     * @return Window
     */
    public function appendTo($value)
    {
        return $this->setProperty('appendTo', $value);
    }

    /**
     * Enables (true) or disables (false) the ability for users to move/drag a Window.
     *
     * @param boolean $value
     *
     * @return Window
     */
    public function draggable($value)
    {
        return $this->setProperty('draggable', $value);
    }

    /**
     * Explicitly states whether content iframe should be created.
     *
     * @param boolean $value
     *
     * @return Window
     */
    public function iframe($value)
    {
        return $this->setProperty('iframe', $value);
    }

    /**
     * The maximum height (in pixels) that may be achieved by resizing the window.
     *
     * @param float $value
     *
     * @return Window
     */
    public function maxHeight($value)
    {
        return $this->setProperty('maxHeight', $value);
    }

    /**
     * The maximum width (in pixels) that may be achieved by resizing the window.
     *
     * @param float $value
     *
     * @return Window
     */
    public function maxWidth($value)
    {
        return $this->setProperty('maxWidth', $value);
    }

    /**
     * The minimum height (in pixels) that may be achieved by resizing the window.
     *
     * @param float $value
     *
     * @return Window
     */
    public function minHeight($value)
    {
        return $this->setProperty('minHeight', $value);
    }

    /**
     * The minimum width (in pixels) that may be achieved by resizing the window.
     *
     * @param float $value
     *
     * @return Window
     */
    public function minWidth($value)
    {
        return $this->setProperty('minWidth', $value);
    }

    /**
     * Specifies whether the window should show a modal overlay over the page.
     *
     * @param boolean $value
     *
     * @return Window
     */
    public function modal($value)
    {
        return $this->setProperty('modal', $value);
    }

    /**
     * Enables (true) or disables (false) the ability for users to resize a Window.
     *
     * @param boolean $value
     *
     * @return Window
     */
    public function resizable($value)
    {
        return $this->setProperty('resizable', $value);
    }

    /**
     * The text in the window title bar. If false, the window will be displayed without a title bar.
     * Note that this will prevent the window from being dragged, and the window titlebar buttons will not be shown.
     *
     * @param string|boolean $value
     *
     * @return Window
     */
    public function title($value)
    {
        return $this->setProperty('title', $value);
    }

    /**
     * Specifies whether the window will be initially visible.
     *
     * @param boolean $value
     *
     * @return Window
     */
    public function visible($value)
    {
        return $this->setProperty('visible', $value);
    }

    /**
     * Specifies width of the window.
     *
     * @param float $value
     *
     * @return Window
     */
    public function width($value)
    {
        return $this->setProperty('width', $value);
    }

    /**
     * Specifies height of the window.
     *
     * @param float $value
     *
     * @return Window
     */
    public function height($value)
    {
        return $this->setProperty('height', $value);
    }

    /**
     * Sets the activate event of the Window.
     * Triggered when a Window has finished its opening animation.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return Window
     */
    public function activate($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('activate', $value);
    }

    /**
     * Sets the close event of the Window.
     * Triggered when a Window is closed (by a user or through the close() method).
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return Window
     */
    public function close($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
     * Sets the deactivate event of the Window.
     * Triggered when a Window has finished its closing animation.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return Window
     */
    public function deactivate($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('deactivate', $value);
    }

    /**
     * Sets the dragend event of the Window.
     * Triggered when a Window has been moved by a user.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return Window
     */
    public function dragend($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dragend', $value);
    }

    /**
     * Sets the dragstart event of the Window.
     * Triggered when the user starts to move the window.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return Window
     */
    public function dragstart($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('dragstart', $value);
    }

    /**
     * Sets the error event of the Window.
     * Triggered when an AJAX request for content fails.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return Window
     */
    public function error($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('error', $value);
    }

    /**
     * Sets the open event of the Window.
     * Triggered when a Window is opened (i.e. the open() method is called).
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return Window
     */
    public function open($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }

    /**
     * Sets the refresh event of the Window.
     * Triggered when the content of a Window has finished loading via AJAX,
     * when the window iframe has finished loading, or when the refresh button
     * has been clicked on a window with static content.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return Window
     */
    public function refresh($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('refresh', $value);
    }

    /**
     * Sets the resize event of the Window.
     * Triggered when a Window has been resized by a user.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return Window
     */
    public function resize($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('resize', $value);
    }


    /**
     * Sets the HTML content of the Window.
     *
     * @param string $value
     *
     * @return Window
     */
    public function content($value)
    {
        return $this->setProperty('content', $value);
    }

    /**
     * Starts output bufferring. Any following markup will be set as the content of the Window.
     */
    public function startContent()
    {
        ob_start();
    }

    /**
     * Stops output bufferring and sets the preceding markup as the content of the Window.
     */
    public function endContent()
    {
        $this->content(ob_get_clean());
    }
}
