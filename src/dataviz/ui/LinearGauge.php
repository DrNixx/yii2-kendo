<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\UI\Widget;

class LinearGauge extends Widget {
    protected function name() {
        return 'LinearGauge';
    }

    /**
     * The gauge area configuration options.
This is the entire visible area of the gauge.
     * @param \yii2\kendo\dataviz\ui\LinearGaugeGaugeArea|array $value
     * @return \yii2\kendo\dataviz\ui\LinearGauge
     */
    public function gaugeArea($value) {
        return $this->setProperty('gaugeArea', $value);
    }

    /**
     * The pointer configuration options.
     * @param \yii2\kendo\dataviz\ui\LinearGaugePointer|array $value
     * @return \yii2\kendo\dataviz\ui\LinearGauge
     */
    public function pointer($value) {
        return $this->setProperty('pointer', $value);
    }

    /**
     * Configures the scale.
     * @param \yii2\kendo\dataviz\ui\LinearGaugeScale|array $value
     * @return \yii2\kendo\dataviz\ui\LinearGauge
     */
    public function scale($value) {
        return $this->setProperty('scale', $value);
    }

    /**
     * A value indicating if transition animations should be played.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\LinearGauge
     */
    public function transitions($value) {
        return $this->setProperty('transitions', $value);
    }


}
