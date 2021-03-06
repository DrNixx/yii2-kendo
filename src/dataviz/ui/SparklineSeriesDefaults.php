<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class SparklineSeriesDefaults extends SerializableObject {

    /**
     * The area configuration options.
The default options for all area series. For more details see the series options.
     * @param  $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function area($value) {
        return $this->setProperty('area', $value);
    }

    /**
     * The default options for all bar series. For more details see the series options.
     * @param  $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function bar($value) {
        return $this->setProperty('bar', $value);
    }

    /**
     * The border of the series.
     * @param \kendo\dataviz\ui\SparklineSeriesDefaultsBorder|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The column configuration options.
The default options for all column series. For more details see the series options.
     * @param  $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function column($value) {
        return $this->setProperty('column', $value);
    }

    /**
     * The distance between category clusters.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function gap($value) {
        return $this->setProperty('gap', $value);
    }

    /**
     * Configures the series data labels.
     * @param \kendo\dataviz\ui\SparklineSeriesDefaultsLabels|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function labels($value) {
        return $this->setProperty('labels', $value);
    }

    /**
     * The line configuration options.
The default options for all line series. For more details see the series options.
     * @param  $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * The effects overlay.
     * @param  $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function overlay($value) {
        return $this->setProperty('overlay', $value);
    }

    /**
     * The pie configuration options.
The default options for all pie series. For more details see the series options.
     * @param  $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function pie($value) {
        return $this->setProperty('pie', $value);
    }

    /**
     * Space between bars.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function spacing($value) {
        return $this->setProperty('spacing', $value);
    }

    /**
     * A value indicating if the series should be stacked.
     * @param boolean $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function stack($value) {
        return $this->setProperty('stack', $value);
    }

    /**
     * The data point tooltip configuration options.
     * @param \kendo\dataviz\ui\SparklineSeriesDefaultsTooltip|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesDefaults
     */
    public function tooltip($value) {
        return $this->setProperty('tooltip', $value);
    }

}
