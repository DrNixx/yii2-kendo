<?php
namespace yii2\kendo\html;

class Element implements Node
{
    /**
     * @var string
     */
    private $tagName;

    /**
     * @var bool
     */
    private $selfClosing;

    /**
     * @var Node[]
     */
    private $children = [];

    /**
     * @var array
     */
    private $attributes = [];

    /**
     * @var string
     */
    private $innerHtml = '';

    public function __construct($tagName, $selfClosing = false)
    {
        $this->tagName = $tagName;
        $this->selfClosing = $selfClosing;
    }

    public function tagName()
    {
        return $this->tagName;
    }

    public function text($value)
    {
        return $this->html(Htmlentities($value));
    }

    public function html($value)
    {
        $this->innerHtml = $value;
        $this->children = array();

        return $this;
    }

    public function attr($key, $value)
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    public function append(Node $node)
    {
        $this->children[] = $node;

        return $this;
    }

    public function render()
    {
        return $this->outerHtml();
    }

    public function outerHtml()
    {
        $Html = array();

        $Html[] = '<';
        $Html[] = $this->tagName;

        foreach ($this->attributes as $key => $value) {
            $Html[] = ' ';
            $Html[] = $key;
            $Html[] = '="';
            $Html[] = $value;
            $Html[] = '"';
        }

        if ($this->selfClosing) {
            $Html[] = ' />';
        } else {
            $Html[] = '>';

            if ($this->innerHtml !== '') {
                $Html[] = $this->innerHtml;
            }

            foreach ($this->children as $child) {
                $Html[] = $child->render();
            }

            $Html[] = '</';
            $Html[] = $this->tagName;
            $Html[] = '>';
        }

        return implode($Html);
    }
}
