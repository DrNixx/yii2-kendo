<?php
namespace kendo\ui;

use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\helpers\Html;

abstract class InputWidget extends Widget
{
    /**
     * @var \yii\widgets\ActiveField active input field, which triggers this widget rendering.
     * This field will be automatically filled up in case widget instance is created
     * via [[\yii\widgets\ActiveField::widget()]].
     * @since 2.0.11
     */
    public $field;

    /**
     * @var Model the data model that this widget is associated with.
     */
    public $model;

    /**
     * @var string the model attribute that this widget is associated with.
     */
    public $attribute;

    /**
     * @var string the input name. This must be set if [[model]] and [[attribute]] are not set.
     */
    public $inputName;

    /**
     * @var string the input value.
     */
    public $inputValue;

    /**
     * InputWidget constructor.
     *
     * @param array $config
     */
    public function __construct($config = [])
    {
        foreach (['field', 'model', 'attribute', 'inputName', 'inputValue', 'view'] as $key => $val) {
            if (isset($config[$key])) {
                $this->$key = $val;
                unset($config[$key]);
            }
        }

        parent::__construct($config);
    }

    /**
     * Define the value of the widget
     *
     * @param string $value
     *
     * @return static
     */
    abstract public function value($value);

    /**
     * @return string
     *
     * @throws \yii\base\InvalidConfigException
     */
    public function run()
    {
        if ($this->hasModel()) {
            $name = !empty($this->inputName) ?
                $this->inputName :
                Html::getInputName($this->model, $this->attribute);

            $value = !empty($this->inputValue) ?
                $this->inputValue :
                Html::getAttributeValue($this->model, $this->attribute);
        } else {
            $name = $this->inputName;
            $value = strval($this->inputValue);
        }

        $this->setProperty('name', $name);
        $this->value($value);

        return parent::run();
    }

    /**
     * @throws InvalidConfigException
     */
    protected function initIdentifiers()
    {
        if (empty($this->inputName) && !$this->hasModel()) {
            throw new InvalidConfigException("Either 'name', or 'model' and 'attribute' properties must be specified.");
        }

        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->hasModel() ?
                Html::getInputId($this->model, $this->attribute) :
                $this->getId();
        }

        parent::initIdentifiers();
    }

    /**
     * @return bool whether this widget is associated with a data model.
     */
    protected function hasModel()
    {
        return $this->model instanceof Model && $this->attribute !== null;
    }
}
