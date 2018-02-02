<?php

namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class ChartPane extends SerializableObject {

    /**
     * The unique pane name.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartPane
     */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
     * The margin of the pane.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\ChartPane
     */
    public function margin($value) {
        return $this->setProperty('margin', $value);
    }

    /**
     * The padding of the pane.
     * @param float| $value
     * @return \yii2\kendo\dataviz\ui\ChartPane
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * The background color of the pane.
     * @param string $value
     * @return \yii2\kendo\dataviz\ui\ChartPane
     */
    public function background($value) {
        return $this->setProperty('background', $value);
    }

    /**
     * The border of the pane.
     * @param \yii2\kendo\dataviz\ui\ChartPaneBorder|array $value
     * @return \yii2\kendo\dataviz\ui\ChartPane
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The pane height in pixels.
     * @param float $value
     * @return \yii2\kendo\dataviz\ui\ChartPane
     */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

    /**
     * The pane title text or configuration.
     * @param string|\yii2\kendo\dataviz\ui\ChartPaneTitle|array $value
     * @return \yii2\kendo\dataviz\ui\ChartPane
     */
    public function title($value) {
        return $this->setProperty('title', $value);
    }

}
