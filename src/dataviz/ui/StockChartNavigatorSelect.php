<?php
namespace kendo\dataviz\ui;

use kendo\SerializableObject;

class StockChartNavigatorSelect extends SerializableObject
{
    /**
     * The lower boundary of the selected range.
     * @param \DateTime $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSelect
     */
    public function from($value)
    {
        return $this->setProperty('from', $value);
    }

    /**
     * The upper boundary of the selected range.
     * @param \DateTime $value
     * @return \kendo\dataviz\ui\StockChartNavigatorSelect
     */
    public function to($value)
    {
        return $this->setProperty('to', $value);
    }
}
