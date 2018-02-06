<?php
namespace yii2\kendo\ui;

use yii2\kendo\Html\Element;
use yii2\kendo\JavaScriptFunction;

class DateTimePicker extends InputWidget
{
    protected function kendoName()
    {
        return 'DateTimePicker';
    }

    /**
     * @return Element
     */
    protected function createElement()
    {
        return new Element('input', true);
    }

    /**
     * The animation(s) used for opening and/or closing the pop-ups. Setting this value to false
     * will disable the animation(s).
     *
     * @param \yii2\kendo\ui\DateTimePickerAnimation|array $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
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
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function culture($value)
    {
        return $this->setProperty('culture', $value);
    }

    /**
     * Specifies a list of dates, which will be passed to the month template of the DateView.
     * All dates, which match the date portion of the selected date will be used to re-bind the TimeView.
     *
     * @param array $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function dates($value)
    {
        return $this->setProperty('dates', $value);
    }

    /**
     * Specifies the navigation depth of the calendar. The following settings are available for the depth value:
     *
     * @param string $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function depth($value)
    {
        return $this->setProperty('depth', $value);
    }

    /**
     * Template to be used for rendering the footer of the calendar.
     *
     * @param string $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function footer($value)
    {
        return $this->setProperty('footer', $value);
    }

    /**
     * Specifies the format, which is used to format the value of the DateTimePicker displayed in the input.
     * The format also will be used to parse the input.
     *
     * @param string $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
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
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function interval($value)
    {
        return $this->setProperty('interval', $value);
    }

    /**
     * Specifies the maximum date, which the calendar can show.
     *
     * @param \DateTime $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function max($value)
    {
        return $this->setProperty('max', $value);
    }

    /**
     * Specifies the minimum date that the calendar can show.
     *
     * @param \DateTime $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function min($value)
    {
        return $this->setProperty('min', $value);
    }

    /**
     * Templates for the cells rendered in the calendar "month" view.
     *
     * @param \yii2\kendo\ui\DateTimePickerMonth|array $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function month($value)
    {
        return $this->setProperty('month', $value);
    }

    /**
     * Specifies the formats, which are used to parse the value set with value() method or by direct input.
     * If not set the value of the options.format and options.timeFormat will be used.
     * Note that value of the format option is always used.
     *
     * @param array $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function parseFormats($value)
    {
        return $this->setProperty('parseFormats', $value);
    }

    /**
     * Specifies the start view of the calendar. The following settings are available for the start value:
     *
     * @param string $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function start($value)
    {
        return $this->setProperty('start', $value);
    }

    /**
     * Specifies the format, which is used to format the values in the time drop-down list.
     *
     * @param string $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function timeFormat($value)
    {
        return $this->setProperty('timeFormat', $value);
    }

    /**
     * Specifies the selected value.
     *
     * @param \DateTime $value
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
    }

    /**
     * Sets the change event of the DateTimePicker.
     * Triggered when the underlying value of a DateTimePicker is changed.
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function change($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
     * Sets the close event of the DateTimePicker.
     * Fires when the calendar or the time drop-down list is closed
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function close($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
     * Sets the open event of the DateTimePicker.
     * Fires when the calendar or the time drop-down list is opened
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return \yii2\kendo\ui\DateTimePicker
     */
    public function open($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }
}
