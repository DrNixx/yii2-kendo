<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;
use kendo\Template;

class StockChartSeriesDefaultsTooltip extends SerializableObject {

    /**
     * The background color of the tooltip. The default is determined from the series color.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartSeriesDefaultsTooltip
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border configuration options.
     * @param \kendo\dataviz\ui\StockChartSeriesDefaultsTooltipBorder|array $value
     * @return \kendo\dataviz\ui\StockChartSeriesDefaultsTooltip
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The text color of the tooltip. The default is the same as the series labels color.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartSeriesDefaultsTooltip
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The tooltip font.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartSeriesDefaultsTooltip
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * The tooltip format.
     * @param string $value
     * @return \kendo\dataviz\ui\StockChartSeriesDefaultsTooltip
     */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
     * The padding of the tooltip.
     * @param float| $value
     * @return \kendo\dataviz\ui\StockChartSeriesDefaultsTooltip
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * Sets the template option of the StockChartSeriesDefaultsTooltip.
     * The tooltip template.
Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\dataviz\ui\StockChartSeriesDefaultsTooltip
     */
    public function templateId($value) {
        $value = new Template($value);

        return $this->setProperty('template', $value);
    }

    /**
     * Sets the template option of the StockChartSeriesDefaultsTooltip.
     * The tooltip template.
Template variables:
     * @param string $value The template content.
     * @return \kendo\dataviz\ui\StockChartSeriesDefaultsTooltip
     */
    public function template($value) {
        return $this->setProperty('template', $value);
    }

    /**
     * A value indicating if the tooltip should be displayed.
     * @param boolean $value
     * @return \kendo\dataviz\ui\StockChartSeriesDefaultsTooltip
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
