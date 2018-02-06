<?php
namespace yii2\kendo;

class Template extends JavaScriptFunction
{
    public function __construct($value, $config = [])
    {
        parent::__construct($value, $config);
    }

    public function value()
    {
        return "kendo.template(jQuery('#".parent::value()."').html())";
    }
}
