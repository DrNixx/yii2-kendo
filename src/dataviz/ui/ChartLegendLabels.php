<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;
use yii2\kendo\Template;

class ChartLegendLabels extends SerializableObject {

    /**
     * The color of the labels.
Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartLegendLabels
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The font style of the labels.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartLegendLabels
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * Sets the template option of the ChartLegendLabels.
     * The template of the labels.
Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \yii2\kendo\dataviz\ui\ChartLegendLabels
     */
    public function templateId($value) {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the ChartLegendLabels.
     * The template of the labels.
Template variables:
     * @param string $value The template content.
     * @return \yii2\kendo\dataviz\ui\ChartLegendLabels
     */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

}
