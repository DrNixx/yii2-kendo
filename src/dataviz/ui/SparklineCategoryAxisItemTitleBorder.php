<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class SparklineCategoryAxisItemTitleBorder extends SerializableObject {

    /**
     * The color of the border. Any valid CSS color string will work here, including
hex and rgb.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitleBorder
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The dash type of the border.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitleBorder
     */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
     * The width of the border.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitleBorder
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

}
