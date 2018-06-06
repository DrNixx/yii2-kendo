<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartTitle extends SerializableObject {

    /**
     * The alignment of the title.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartTitle
     */
    public function align($value) {
        return $this->setProperty('align', $value);
    }

    /**
     * The background color of the title.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartTitle
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the title.
     * @param \kendo\dataviz\ui\ChartTitleBorder|array $value
     * @return \kendo\dataviz\ui\ChartTitle
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The font of the title.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartTitle
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * The margin of the title.
     * @param float| $value
     * @return \kendo\dataviz\ui\ChartTitle
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The padding of the title.
     * @param float| $value
     * @return \kendo\dataviz\ui\ChartTitle
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * The position of the title.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartTitle
     */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
     * The title of the chart. You can also set the text directly for a title with default options.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartTitle
     */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
     * The visibility of the title.
     * @param boolean $value
     * @return \kendo\dataviz\ui\ChartTitle
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
