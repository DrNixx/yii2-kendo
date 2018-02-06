<?php
namespace yii2\kendo\ui;

use yii\base\Widget as YiiWidget;
use yii\web\View;
use yii2\kendo\Html\Element;
use yii2\kendo\Serializable;
use yii2\kendo\SerializableTrait;
use yii2\kendo\Serializer;

abstract class Widget extends YiiWidget implements Serializable
{
    use SerializableTrait;

    public $options = [];

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

    public function __construct($config = [])
    {
        parent::__construct();
    }

    public function init()
    {
        $this->initIdentifiers();
        parent::init();
    }

    public function run()
    {
        $this->registerJavascript();
        $this->registerAssets();

        return $this->html();
    }

    public function attr($key, $value = null)
    {
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                $this->options[$k] = $v;
            }
        } else {
            $this->options[$key] = $value;
        }

        return $this;
    }

    public function html()
    {
        $element = $this->createElement();
        $this->assignAttributes($element);
        return $element->outerHtml();
    }

    public function toJSON()
    {
        $serializer = new Serializer();
        return $serializer->serialize($this);
    }

    public function renderInTemplate()
    {
        $output = [];

        $this->isClientTemplate = true;

        $output[] = $this->html();
        $output[] = '<script>';
        $output[] = $this->getScript();
        $output[] = '</script>';

        $this->isClientTemplate = false;

        return str_replace('</script>', '<\\/script>', implode($output));
    }

    abstract protected function kendoName();

    protected function initIdentifiers()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
    }

    protected function createElement()
    {
        return new Element('div');
    }

    /**
     * @param Element $element
     */
    protected function assignAttributes(Element $element)
    {
        if ($element->tagName() == 'textarea' || $element->tagName() == 'input') {
            $this->options['name'] = $this->options['id'];
        }

        foreach ($this->options as $key => $value) {
            $element->attr($key, $value);
        }
    }

    protected function getScript()
    {
        $prefix = $this->isClientTemplate ? '\#' : '#';
        $selector = $this->escapeSelector($this->options['id']);
        $name = $this->kendoName();
        $json = $this->toJSON();

        return "jQuery('{$prefix}{$selector}').kendo{$name}({$json});";
    }

    protected function registerJavascript($position = View::POS_READY)
    {
        $this->view->registerJs($this->getScript(), $position);
    }

    protected function registerAssets()
    {
    }

    private function escapeSelector($value)
    {
        return preg_replace('/([\[\]])/', "\\\\\\\\\\1", $value);
    }
}
