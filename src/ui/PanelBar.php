<?php
namespace yii2\kendo\ui;

use yii2\kendo\Html\Element;
use yii2\kendo\JavaScriptFunction;

class PanelBar extends Widget
{
    protected $ignore = array('items');

    /**
     * @return string
     */
    protected function kendoName()
    {
        return 'PanelBar';
    }

    /**
     * @return Element
     */
    protected function createElement()
    {
        $element = new Element('ul');
        $items = $this->getProperty('items');

        $hasContentUrls = false;
        $contentUrls = array();

        if ($items) {
            /** @var PanelBarItem $item */
            foreach ($items as $item) {
                $element->append($item->createElement());

                if ($hasContentUrls == false) {
                    $hasContentUrls = strlen($item->getProperty("contentUrl"));
                }

                $contentUrls[] = $item->getProperty("contentUrl");
            }
        }

        if ($hasContentUrls) {
            $this->setProperty('contentUrls', $contentUrls);
        }

        return $element;
    }

    /**
     * Sets the data of the PanelBar.
     *
     * @param array $value
     *
     * @return $this
     */
    public function dataSource(array $value)
    {
        return $this->setProperty('dataSource', $value);
    }

    /**
     * A collection of visual animations used when PanelBar items are exapnd or collapsed through
     * user interactions. Setting this option to false will disable all animations.
     *
     * @param boolean|PanelBarAnimation|array $value
     *
     * @return $this
     */
    public function animation($value)
    {
        return $this->setProperty('animation', $value);
    }

    /**
     * Specifies how the PanelBar items are displayed when opened and closed.
     * The following values are available:
     *
     * @param string $value
     *
     * @return $this
     */
    public function expandMode($value)
    {
        return $this->setProperty('expandMode', $value);
    }

    /**
     * Adds PanelBarItem to the PanelBar.
     *
     * @param PanelBarItem|array,... $value one or more PanelBarItem to add.
     *
     * @return $this
     */
    public function addItem($value)
    {
        return $this->add('items', func_get_args());
    }

    /**
     * Sets the activate event of the PanelBar.
     * Triggered when an item of a PanelBar is activated.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function activate($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('activate', $value);
    }

    /**
     * Sets the collapse event of the PanelBar.
     * Triggered when an item of a PanelBar is collapsed.
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
     * Sets the contentLoad event of the PanelBar.
     * Fires when content is fetched from an AJAX request.
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
     * Sets the error event of the PanelBar.
     * Fires when AJAX request results in an error.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function error($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('error', $value);
    }

    /**
     * Sets the expand event of the PanelBar.
     * Triggered when an item of a PanelBar is expanded.
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
     * Sets the select event of the PanelBar.
     * Triggered when an item of a PanelBar is selected.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return $this
     */
    public function select($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }
}
