<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class LinearGaugePointerTrack extends SerializableObject {

    /**
     * The border of the track.
     * @param \yii2\kendo\dataviz\ui\LinearGaugePointerTrackBorder|array $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointerTrack
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The color of the track.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointerTrack
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The opacity of the track.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointerTrack
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The size of the track.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointerTrack
     */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
     * The visibility of the track.
     * @param boolean $value
     * @return \yii2\kendo\dataviz\ui\LinearGaugePointerTrack
     */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

}
