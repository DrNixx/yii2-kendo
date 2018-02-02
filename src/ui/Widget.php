<?php
namespace yii2\kendo\ui;

use yii2\kendo\Html\Element;
use yii2\kendo\SerializableObject;

abstract class Widget extends SerializableObject
{
    protected $id;

    private $attributes = array();

    private $isClientTemplate = false;

    public static function make($args = null)
    {
        if (is_array($args)) {
            $field = array_shift($args);
            $obj = new static($field);
            foreach ($args as $key => $value) {
                $obj->$key($value);
            }

            return $obj;
        } else {
            return new static($args);
        }
    }

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function attr($key, $value = null)
    {
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                $this->attributes[$k] = $v;
            }
        } else {
            $this->attributes[$key] = $value;
        }

        return $this;
    }

    protected function createElement()
    {
        return new Element('div');
    }

    protected function addAttributes(Element $element)
    {
        $element->attr('id', $this->id);

        if ($element->tagName() == 'textarea' || $element->tagName() == 'input') {
            $element->attr('name', $this->id);
        }

        foreach ($this->attributes as $key => $value) {
            $element->attr($key, $value);
        }
    }

    public function html()
    {
        $element = $this->createElement();

        $this->addAttributes($element);

        return $element->outerHtml();
    }

    abstract protected function name();

    public function render()
    {
        $output = array();

        $output[] = $this->html();
        $output[] = '<script>';
        $output[] = $this->script();
        $output[] = '</script>';

        return implode($output);
    }

    public function renderInTemplate()
    {
        $this->isClientTemplate = true;

        $output = $this->render();

        $this->isClientTemplate = false;

        return str_replace('</script>', '<\\/script>', $output);
    }

    private function escapeSelector($value)
    {
        return preg_replace('/([\[\]])/', "\\\\\\\\\\1", $value);
    }

    public function script($executeOnDomReady = true)
    {
        $script = array();

        if ($executeOnDomReady) {
            $script[] = 'jQuery(function(){';
        }

        $prefix = $this->isClientTemplate ? '\#' : '#';

        $script[] = 'jQuery("'.$prefix;
        $script[] = $this->escapeSelector($this->id);
        $script[] = '").kendo';
        $script[] = $this->name();
        $script[] = '(';
        $script[] = $this->toJSON();
        $script[] = ');';

        if ($executeOnDomReady) {
            $script[] = '});';
        }

        return implode($script);
    }
}
