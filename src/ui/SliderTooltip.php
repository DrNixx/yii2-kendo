<?php
namespace kendo\ui;

use kendo\SerializableObject;
use kendo\Template;

class SliderTooltip extends SerializableObject
{
    /**
     * Disables (false) or enables (true) the tooltip of the Slider.
     *
     * @param boolean $value
     *
     * @return $this
     */
    public function enabled($value)
    {
        return $this->setProperty('enabled', $value);
    }

    /**
     * Format string for the text of the tooltip. Note: The applied format will also
     * influence the appearance of the Slider tick labels.
     *
     * @param string $value
     *
     * @return $this
     */
    public function format($value)
    {
        return $this->setProperty('format', $value);
    }

    /**
     * Sets the template option of the SliderTooltip.
     * Template of the tooltip.
     *
     * @param string $value The id of the element which represents the kendo template.
     *
     * @return $this
     */
    public function templateId($value)
    {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the SliderTooltip.
     * Template of the tooltip.
     *
     * @param string $value The template content.
     *
     * @return $this
     */
    public function template($value)
    {
        return $this->setProperty('template', $value);
    }
}
