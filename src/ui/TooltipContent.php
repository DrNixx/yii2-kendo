<?php
namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class TooltipContent extends SerializableObject
{
    /**
     * Specifies a URL or request options that the tooltip should load its content from.Note: For URLs starting
     * with a protocol (e.g. http://), a container iframe element is automatically created. This behavior may
     * change in future versions, so it is advisable to always use the iframe configuration option.
     *
     * @param string $value
     *
     * @return \yii2\kendo\ui\TooltipContent
     */
    public function url($value)
    {
        return $this->setProperty('url', $value);
    }
}
