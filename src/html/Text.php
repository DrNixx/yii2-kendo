<?php
namespace yii2\kendo\html;

class Text implements Node
{
    /**
     * @var string
     */
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function render()
    {
        return $this->value;
    }
}
