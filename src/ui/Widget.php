<?php
namespace kendo\ui;

use kendo\assets\KendoAsset;
use kendo\assets\KendoMobileAsset;
use Yii;
use yii\base\Widget as YiiWidget;
use yii\web\View;
use kendo\Html\Element;
use kendo\Serializable;
use kendo\SerializableTrait;
use kendo\Serializer;

abstract class Widget extends YiiWidget implements Serializable
{
    use SerializableTrait;

    public $mobile = false;

    public $options = [];

    private $isClientTemplate = false;

    public function __construct($config = [])
    {
        parent::__construct();

        foreach ($config as $key => $value) {
            $this->$key($value);
        }
    }

    public function init()
    {
        $this->initIdentifiers();
        parent::init();
    }

    /**
     * @return string
     *
     * @throws \yii\base\InvalidConfigException
     */
    public function run()
    {
        $this->registerAssets();
        $this->registerJavascript();

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
            if (empty($this->options['name'])) {
                $this->options['name'] = $this->options['id'];
            }
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

    /**
     * @throws \yii\base\InvalidConfigException
     */
    protected function registerAssets()
    {
        $view = $this->getView();

        if ($this->mobile) {
            $view->registerAssetBundle(KendoMobileAsset::class);
        } else {
            $view->registerAssetBundle(KendoAsset::class);
        }

        $lang = Yii::$app->language;
        $view->registerJs(
            "if (window.kendo) { kendo.culture('{$lang}'); }",
            View::POS_READY,
            "KendoUICultureInitialize"
        );
    }

    private function escapeSelector($value)
    {
        return preg_replace('/([\[\]])/', "\\\\\\\\\\1", $value);
    }
}
