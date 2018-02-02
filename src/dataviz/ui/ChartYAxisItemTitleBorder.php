<?php
namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class ChartYAxisItemTitleBorder extends SerializableObject
{
    /**
     * The color of the border.
     *
     * @param string $value
     *
     * @return \yii2\kendo\dataviz\ui\ChartYAxisItemTitleBorder
     */
    public function color($value)
    {
        return $this->setProperty('color', $value);
    }

    /**
     * The dash type of the border.
     *
     * @param string $value
     *
     * @return \yii2\kendo\dataviz\ui\ChartYAxisItemTitleBorder
     */
    public function dashType($value)
    {
        return $this->setProperty('dashType', $value);
    }

    /**
     * The width of the border.
     *
     * @param float $value
     *
     * @return $this
     */
    public function width($value)
    {
        return $this->setProperty('width', $value);
    }
}
