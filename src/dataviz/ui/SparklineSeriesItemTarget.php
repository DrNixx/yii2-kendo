<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class SparklineSeriesItemTarget extends SerializableObject {

    /**
     * The target line.
     * @param \yii2\kendo\dataviz\ui\SparklineSeriesItemTargetLine|array $value
     * @return \yii2\kendo\dataviz\ui\SparklineSeriesItemTarget
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * The target color.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\SparklineSeriesItemTarget
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The border of the target.
     * @param \yii2\kendo\dataviz\ui\SparklineSeriesItemTargetBorder|array $value
     * @return \yii2\kendo\dataviz\ui\SparklineSeriesItemTarget
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

}
