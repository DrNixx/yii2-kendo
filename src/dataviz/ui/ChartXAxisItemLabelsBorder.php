<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class ChartXAxisItemLabelsBorder extends SerializableObject {

    /**
     * The color of the border. Any valid CSS color string will work here, including
hex and rgb.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartXAxisItemLabelsBorder
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The dash type of the border.
     * @param string $value
     * @return \kendo\dataviz\ui\ChartXAxisItemLabelsBorder
     */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
     * The width of the border.
     * @param float $value
     * @return \kendo\dataviz\ui\ChartXAxisItemLabelsBorder
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
