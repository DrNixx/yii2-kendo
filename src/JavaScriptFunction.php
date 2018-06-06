<?php
namespace kendo;

use yii\base\BaseObject;

class JavaScriptFunction extends BaseObject
{
    private $value;

    public function __construct($value, $config = [])
    {
        $this->value = $value;
        parent::__construct($config);
    }

    public function value()
    {
        return $this->value;
    }
}
