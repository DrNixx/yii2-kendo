<?php

namespace kendo\dataviz\ui;

use kendo\SerializableObject;
use kendo\Template;

class SparklineSeriesItem extends SerializableObject {

    /**
     * The type of the series. Available types:
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function type($value) {
        return $this->setProperty('type', $value);
    }

    /**
     * The series line dash type.** Applicable only to line series **
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
     * Array of data items. The data item type can be either a:
     * @param array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function data($value) {
        return $this->setProperty('data', $value);
    }

    /**
     * The data field containing a boolean value that indicates if the sector is exploded.** Available for pie series **
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function explodeField($value) {
        return $this->setProperty('explodeField', $value);
    }

    /**
     * The data field containing the current value.** Available for bullet and verticalBullet series. **
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function currentField($value) {
        return $this->setProperty('currentField', $value);
    }

    /**
     * The data field containing the target value.** Available for bullet and verticalBullet series. **** Available for pie series **
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function targetField($value) {
        return $this->setProperty('targetField', $value);
    }

    /**
     * The data field containing the series value.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function field($value) {
        return $this->setProperty('field', $value);
    }

    /**
     * Sets the groupNameTemplate option of the SparklineSeriesItem.
     * Name template for auto-generated series when binding to grouped data.Template variables:
     * @param string $value The id of the element which represents the kendo template.
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function groupNameTemplateId($value) {
        $value = new Template($value);

        return $this->setProperty('groupNameTemplate', $value);
    }

    /**
     * Sets the groupNameTemplate option of the SparklineSeriesItem.
     * Name template for auto-generated series when binding to grouped data.Template variables:
     * @param string $value The template content.
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function groupNameTemplate($value) {
        return $this->setProperty('groupNameTemplate', $value);
    }

    /**
     * The series name.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
     * Configures the appearance of highlighted points.
     * @param \kendo\dataviz\ui\SparklineSeriesItemHighlight|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function highlight($value) {
        return $this->setProperty('highlight', $value);
    }

    /**
     * Aggregate function for date series.This function is used when a category (an year, month, etc.) contains two or more points.
The function return value is displayed instead of the individual points.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function aggregate($value) {
        return $this->setProperty('aggregate', $value);
    }

    /**
     * The name of the value axis to use.** Applicable to area, bar, column and line series **
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function axis($value) {
        return $this->setProperty('axis', $value);
    }

    /**
     * The border of the points.** Applicable to bar, column and pie series **
     * @param \kendo\dataviz\ui\SparklineSeriesItemBorder|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function border($value) {
        return $this->setProperty('border', $value);
    }

    /**
     * The data field containing the point category name.** Applicable to pie series. **
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function categoryField($value) {
        return $this->setProperty('categoryField', $value);
    }

    /**
     * The series base color.
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
     * The data field containing the point color.** Applicable for bar, column and pie series. **
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function colorField($value) {
        return $this->setProperty('colorField', $value);
    }

    /**
     * The label connectors options.** Applicable to pie series. **
     * @param \kendo\dataviz\ui\SparklineSeriesItemConnectors|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function connectors($value) {
        return $this->setProperty('connectors', $value);
    }

    /**
     * The distance between category clusters.** Applicable for bar and column series. **
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function gap($value) {
        return $this->setProperty('gap', $value);
    }

    /**
     * Configures the series data labels.
     * @param \kendo\dataviz\ui\SparklineSeriesItemLabels|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function labels($value) {
        return $this->setProperty('labels', $value);
    }

    /**
     * Line options.** Applicable to area series. **
     * @param string|\kendo\dataviz\ui\SparklineSeriesItemLine|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function line($value) {
        return $this->setProperty('line', $value);
    }

    /**
     * Marker options.** Applicable to area and line series **
     * @param \kendo\dataviz\ui\SparklineSeriesItemMarkers|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function markers($value) {
        return $this->setProperty('markers', $value);
    }

    /**
     * Configures the behavior for handling missing values.** Available for area and line series **
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function missingValues($value) {
        return $this->setProperty('missingValues', $value);
    }

    /**
     * Color to use for bars with negative values.** Applicable only to bar and column series. **
     * @param string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function negativeColor($value) {
        return $this->setProperty('negativeColor', $value);
    }

    /**
     * The series opacity.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * The effects overlay.
     * @param \kendo\dataviz\ui\SparklineSeriesItemOverlay|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function overlay($value) {
        return $this->setProperty('overlay', $value);
    }

    /**
     * The padding around the chart (equal on all sides).** Available for pie series. **
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function padding($value) {
        return $this->setProperty('padding', $value);
    }

    /**
     * The size (or radius) of the series in pixels.
If not specified, the available space is split evenly between the series.Available for only.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
     * The start angle of the first segment.Available for pie series.
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function startAngle($value) {
        return $this->setProperty('startAngle', $value);
    }

    /**
     * Space between points as proportion of the point width.** Available for bar and column series. **
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function spacing($value) {
        return $this->setProperty('spacing', $value);
    }

    /**
     * A value indicating if the series should be stacked. String value indicates that the series should be stacked in a group with the specified name.
** Available for bar and column series. **
     * @param boolean|string $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function stack($value) {
        return $this->setProperty('stack', $value);
    }

    /**
     * The data point tooltip configuration options.
     * @param \kendo\dataviz\ui\SparklineSeriesItemTooltip|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function tooltip($value) {
        return $this->setProperty('tooltip', $value);
    }

    /**
     * The line width.** Available for line series **
     * @param float $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
     * The target of the bullet chart.
     * @param \kendo\dataviz\ui\SparklineSeriesItemTarget|array $value
     * @return \kendo\dataviz\ui\SparklineSeriesItem
     */
    public function target($value) {
        return $this->setProperty('target', $value);
    }

}
