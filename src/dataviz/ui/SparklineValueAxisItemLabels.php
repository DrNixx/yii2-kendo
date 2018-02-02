<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;
use yii2\kendo\Template;

class SparklineValueAxisItemLabels extends SerializableObject {

    /**
     * The background color of the labels. Any valid CSS color string will work here, including
hex and rgb
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the labels.
     * @param \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabelsBorder|array $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The text color of the labels. Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The font style of the labels.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * The format of the labels.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
     * The margin of the labels.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * Mirrors the axis labels and ticks.
If the labels are normally on the left side of the axis,
mirroring the axis will render them to the right.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function mirror($value) {
        return $this->setProperty('mirror', $value);
    }

    /**
     * The padding of the labels.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * The rotation angle of the labels.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function rotation($value) {
        return $this->setProperty('rotation', $value);
    }

    /**
     * Number of labels to skip.
Skips rendering the first n labels.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function skip($value) {
        return $this->setProperty('skip', $value);
    }

    /**
     * Label rendering step.
Every n-th label is rendered where n is the step
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function step($value) {
        return $this->setProperty('step', $value);
    }

    /**
     * Sets the template option of the SparklineValueAxisItemLabels.
     * The label template.
Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function templateId($value) {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the SparklineValueAxisItemLabels.
     * The label template.
Template variables:
     * @param string $value The template content.
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
     * The visibility of the labels.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\SparklineValueAxisItemLabels
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
