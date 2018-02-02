<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class SparklineCategoryAxisItemTitle extends SerializableObject {

    /**
     * The background color of the title. Any valid CSS color string will work here, including
hex and rgb.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitle
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the title.
     * @param \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitleBorder|array $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitle
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The text color of the title. Any valid CSS color string will work here, including hex and rgb.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitle
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The font style of the title.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitle
     */
    public function font($value) {
        return $this->setProperty('font', $value);
    }

    /**
     * The margin of the title.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitle
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The position of the title.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitle
     */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
     * The rotation angle of the title.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitle
     */
    public function rotation($value) {
        return $this->setProperty('rotation', $value);
    }

    /**
     * The text of the title.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitle
     */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
     * The visibility of the title.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\SparklineCategoryAxisItemTitle
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
