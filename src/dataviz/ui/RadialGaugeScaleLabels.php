<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;
use kendo\Template;

class RadialGaugeScaleLabels extends SerializableObject {

    /**
     * The background color of the labels.
Any valid CSS color string will work here, including hex and rgb
     * @param string $value
     * @return \kendo\dataviz\ui\RadialGaugeScaleLabels
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the labels.
     * @param \kendo\dataviz\ui\RadialGaugeScaleLabelsBorder|array $value
     * @return \kendo\dataviz\ui\RadialGaugeScaleLabels
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The text color of the labels.
Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\RadialGaugeScaleLabels
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The font style of the labels.
     * @param string $value
     * @return \kendo\dataviz\ui\RadialGaugeScaleLabels
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * The format of the labels.
     * @param string $value
     * @return \kendo\dataviz\ui\RadialGaugeScaleLabels
     */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
     * The margin of the labels.
     * @param float| $value
     * @return \kendo\dataviz\ui\RadialGaugeScaleLabels
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The padding of the labels.
     * @param float| $value
     * @return \kendo\dataviz\ui\RadialGaugeScaleLabels
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * The labels positions.
     * @param string $value
     * @return \kendo\dataviz\ui\RadialGaugeScaleLabels
     */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
     * Sets the template option of the RadialGaugeScaleLabels.
     * The label template.
Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\dataviz\ui\RadialGaugeScaleLabels
     */
    public function templateId($value) {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the RadialGaugeScaleLabels.
     * The label template.
Template variables:
     * @param string $value The template content.
     * @return \kendo\dataviz\ui\RadialGaugeScaleLabels
     */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
     * The visibility of the labels.
     * @param boolean $value
     * @return \kendo\dataviz\ui\RadialGaugeScaleLabels
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
