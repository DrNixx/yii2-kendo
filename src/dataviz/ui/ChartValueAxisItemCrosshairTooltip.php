<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;
use yii2\kendo\Template;

class ChartValueAxisItemCrosshairTooltip extends SerializableObject {

    /**
     * The background color of the tooltip.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemCrosshairTooltip
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border configuration options.
     * @param \yii2\kendo\dataviz\ui\ChartValueAxisItemCrosshairTooltipBorder|array $value
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemCrosshairTooltip
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The text color of the tooltip.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemCrosshairTooltip
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The tooltip font.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemCrosshairTooltip
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * The tooltip format.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemCrosshairTooltip
     */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
     * The padding of the tooltip.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemCrosshairTooltip
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * Sets the template option of the ChartValueAxisItemCrosshairTooltip.
     * The tooltip template.
Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemCrosshairTooltip
     */
    public function templateId($value) {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the ChartValueAxisItemCrosshairTooltip.
     * The tooltip template.
Template variables:
     * @param string $value The template content.
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemCrosshairTooltip
     */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
     * A value indicating if the tooltip should be displayed.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\ChartValueAxisItemCrosshairTooltip
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
