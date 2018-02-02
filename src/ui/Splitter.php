<?php

namespace yii2\kendo\ui;

use yii2\kendo\Html\Element;
use yii2\kendo\JavaScriptFunction;

class Splitter extends Widget
{
    protected function name()
    {
        return 'Splitter';
    }

    /**
     * @return Element
     */
    protected function createElement()
    {
        $element = new Element('div');
        $element->attr('class', 'k-splitter');

        $panes = $this->getProperty('panes');

        if (isset($panes)) {
            /** @var SplitterPane $pane */
            foreach ($panes as $pane) {
                $element->append($pane->createElement());
            }
        }

        return $element;
    }

    /**
     * Specifies the orientation of the Splitter.
     *
     * @param string $value
     *
     * @return $this
     */
    public function orientation($value)
    {
        return $this->setProperty('orientation', $value);
    }

    /**
     * Adds SplitterPane to the Splitter.
     *
     * @param SplitterPane|array,... $value one or more SplitterPane to add.
     *
     * @return $this
     */
    public function addPane($value)
    {
        return $this->add('panes', func_get_args());
    }

    /**
     * Sets the collapse event of the Splitter.
     * Triggered when a pane of a Splitter is collapsed.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function collapse($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('collapse', $value);
    }

    /**
     * Sets the contentLoad event of the Splitter.
     * Triggered when the content for a pane has finished loading.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function contentLoad($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('contentLoad', $value);
    }

    /**
     * Sets the expand event of the Splitter.
     * Triggered when a pane of a Splitter is expanded.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function expand($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('expand', $value);
    }

    /**
     * Sets the layoutChange event of the Splitter.
     * Fires when the splitter layout has changed
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function layoutChange($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('layoutChange', $value);
    }

    /**
     * Sets the resize event of the Splitter.
     * Triggered when a pane is resized.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function resize($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('resize', $value);
    }
}
