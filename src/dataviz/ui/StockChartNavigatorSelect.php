<?php
namespace yii2\kendo\dataviz\ui;

use yii2\kendo\SerializableObject;

class StockChartNavigatorSelect extends SerializableObject
{
    /**
     * The lower boundary of the selected range.
     * @param \DateTime $value
     * @return \yii2\kendo\dataviz\ui\StockChartNavigatorSelect
     */
    public function from($value)
    {
        return $this->setProperty('from', $value);
    }

    /**
     * The upper boundary of the selected range.
     * @param \DateTime $value
     * @return \yii2\kendo\dataviz\ui\StockChartNavigatorSelect
     */
    public function to($value)
    {
        return $this->setProperty('to', $value);
    }
}
