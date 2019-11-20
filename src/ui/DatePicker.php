<?php
namespace kendo\ui;

use DateTimeInterface;
use kendo\DateChecker;
use kendo\html\Element;
use kendo\JavaScriptFunction;

class DatePicker extends InputWidget
{
    use DateChecker;

    protected function kendoName()
    {
        return 'DatePicker';
    }

    protected function createElement()
    {
        return new Element('input', true);
    }

    /**
     * The animation(s) used for opening and/or closing the pop-up.
     * Setting this value to false will disable the animation(s).
     *
     * @param DatePickerAnimation|array $value
     *
     * @return DatePicker
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
     * @return DatePicker
     */
    public function culture($value)
    {
        return $this->setProperty('culture', $value);
    }

    /**
     * Specifies a list of dates, which will be passed to the month template.
     *
     * @param array $value
     *
     * @return DatePicker
     */
    public function dates($value)
    {
        return $this->setProperty('dates', $value);
    }

    /**
     * Specifies the navigation depth. The following settings are available for the depth value:
     *
     * @param string $value
     *
     * @return DatePicker
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
     * @return DatePicker
     */
    public function footer($value)
    {
        return $this->setProperty('footer', $value);
    }

    /**
     * Specifies the format, which is used to format the value of the DatePicker displayed in the input.
     * The format also will be used to parse the input.
     *
     * @param string $value
     *
     * @return DatePicker
     */
    public function format($value)
    {
        return $this->setProperty('format', $value);
    }

    /**
     * Specifies the maximum date, which the calendar can show.
     *
     * @param DateTimeInterface|string $value
     *
     * @return DatePicker
     */
    public function max($value)
    {
        $value = $this->fixDate($value);

        return $this->setProperty('max', $value);
    }

    /**
     * Specifies the minimum date that the calendar can show.
     *
     * @param DateTimeInterface|string $value
     *
     * @return DatePicker
     */
    public function min($value)
    {
        $value = $this->fixDate($value);

        return $this->setProperty('min', $value);
    }

    /**
     * Templates for the cells rendered in the calendar "month" view.
     * @param DatePickerMonth|array $value
     * @return DatePicker
     */
    public function month($value)
    {
        return $this->setProperty('month', $value);
    }

    /**
     * Specifies the formats, which are used to parse the value set with value() method or by direct input.
     * If not set the value of the format will be used. Note that value of the format option is always used.
     *
     * @param array $value
     *
     * @return DatePicker
     */
    public function parseFormats($value)
    {
        return $this->setProperty('parseFormats', $value);
    }

    /**
     * Specifies the start view. The following settings are available for the start value:
     *
     * @param DateTimeInterface|string $value
     *
     * @return DatePicker
     */
    public function start($value)
    {
        $value = $this->fixDate($value);

        return $this->setProperty('start', $value);
    }

    /**
     * Specifies the selected date.
     *
     * @param DateTimeInterface|string $value
     *
     * @return DatePicker
     */
    public function value($value)
    {
        $value = $this->fixDate($value);

        return $this->setProperty('value', $value);
    }

    /**
     * Sets the change event of the DatePicker.
     * Fires when the selected date is changed
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return DatePicker
     */
    public function change($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
     * Sets the close event of the DatePicker.
     * Fires when the calendar is closed
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return DatePicker
     */
    public function close($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
     * Sets the open event of the DatePicker.
     * Fires when the calendar is opened
     *
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     *
     * @return DatePicker
     */
    public function open($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }
}
