<?php
namespace yii2\kendo;

class Template extends JavaScriptFunction
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function value()
    {
        return "kendo.template($('#".$this->value."').html())";
    }
}
