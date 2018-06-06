<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;
use kendo\Template;

class ChartTooltip extends SerializableObject {

    /**
     * The background color of the tooltip. The default is determined from the series color.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border configuration options.
     * @param \kendo\dataviz\ui\ChartTooltipBorder|array $value
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The text color of the tooltip. The default is the same as the series labels color.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The tooltip font.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * The tooltip format.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
     * The padding of the tooltip.
     * @param float| $value
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * Sets the template option of the ChartTooltip.
     * The tooltip template.
Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function templateId($value) {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the ChartTooltip.
     * The tooltip template.
Template variables:
     * @param string $value The template content.
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
     * A value indicating if the tooltip should be displayed.
     * @param boolean $value
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

    /**
     * A value indicating if the tooltip should be shared.
     * @param boolean $value
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function shared($value) {
        return $this->setProperty('shared', $value);
    }

    /**
     * Sets the sharedTemplate option of the ChartTooltip.
     * The shared tooltip template.
Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function sharedTemplateId($value) {
        $value = new Template($value);

        return $this->setProperty('sharedTemplate', $value);
    }

    /**
     * Sets the sharedTemplate option of the ChartTooltip.
     * The shared tooltip template.
Template variables:
     * @param string $value The template content.
     * @return \kendo\dataviz\ui\ChartTooltip
     */
    public function sharedTemplate($value) {
        return $this->setProperty('sharedTemplate', $value);
    }

}
