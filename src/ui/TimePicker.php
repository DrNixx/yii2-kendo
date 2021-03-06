<?php

namespace kendo\ui;

use DateTime;
use kendo\html\Element;
use kendo\JavaScriptFunction;

class TimePicker extends InputWidget
{
    protected function kendoName()
    {
        return 'TimePicker';
    }

    protected function createElement()
    {
        return new Element('input', true);
    }

    /**
     * Animations to be used for opening/closing the popup. Setting to false will turn of the animation.
     *
     * @param TimePickerAnimation|array $value
     *
     * @return TimePicker
     */
    public function animation($value)
    {
        return $this->setProperty('animation', $value);
    }

    /**
     * Specifies the culture info used by the widget.
     *
     * @param string $value
     *
     * @return TimePicker
     */
    public function culture($value)
    {
        return $this->setProperty('culture', $value);
    }

    /**
     * Specifies a list of dates, which are shown in the time drop-down list.
     * If not set, the DateTimePicker will auto-generate the available times.
     *
     * @param array $value
     *
     * @return TimePicker
     */
    public function dates($value)
    {
        return $this->setProperty('dates', $value);
    }

    /**
     * Specifies the format, which is used to format the value of the TimePicker displayed in the input.
     * The format also will be used to parse the input.
     *
     * @param string $value
     *
     * @return TimePicker
     */
    public function format($value)
    {
        return $this->setProperty('format', $value);
    }

    /**
     * Specifies the interval, between values in the popup list, in minutes.
     *
     * @param float $value
     *
     * @return TimePicker
     */
    public function interval($value)
    {
        return $this->setProperty('interval', $value);
    }

    /**
     * Specifies the end value in the popup list.
     *
     * @param DateTime $value
     *
     * @return TimePicker
     */
    public function max($value)
    {
        return $this->setProperty('max', $value);
    }

    /**
     * Specifies the start value in the popup list.
     *
     * @param DateTime $value
     *
     * @return TimePicker
     */
    public function min($value)
    {
        return $this->setProperty('min', $value);
    }

    /**
     * Specifies the formats, which are used to parse the value set with the value method or by direct input.
     * If not set the value of the options.format will be used. Note that value of the format option is always used.
     *
     * @param array $value
     *
     * @return TimePicker
     */
    public function parseFormats($value)
    {
        return $this->setProperty('parseFormats', $value);
    }

    /**
     * Specifies the selected time.
     * @param DateTime $value
     * @return TimePicker
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
    }

    /**
     * Sets the change event of the TimePicker.
     * Triggered when the underlying value of a TimePicker is changed.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return TimePicker
     */
    public function change($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
     * Sets the close event of the TimePicker.
     * Fires when the time drop-down list is closed
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return TimePicker
     */
    public function close($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
     * Sets the open event of the TimePicker.
     * Fires when the time drop-down list is opened
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return TimePicker
     */
    public function open($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }
}
