<?php
namespace kendo\ui;

use DateTime;
use kendo\JavaScriptFunction;

class Calendar extends InputWidget
{
    protected function kendoName()
    {
        return 'Calendar';
    }

    /**
     * Specifies the culture info used by the widget.
     * @param string $value
     * @return Calendar
     */
    public function culture($value)
    {
        return $this->setProperty('culture', $value);
    }

    /**
     * Specifies a list of dates, which will be passed to the month template.
     * @param array $value
     * @return Calendar
     */
    public function dates($value)
    {
        return $this->setProperty('dates', $value);
    }

    /**
     * Specifies the navigation depth.
     * @param string $value
     * @return Calendar
     */
    public function depth($value)
    {
        return $this->setProperty('depth', $value);
    }

    /**
     * Template to be used for rendering the footer. If false, the footer will not be rendered.
     * @param string $value
     * @return Calendar
     */
    public function footer($value)
    {
        return $this->setProperty('footer', $value);
    }

    /**
     * Specifies the format, which is used to parse value set with value() method.
     * @param string $value
     * @return Calendar
     */
    public function format($value)
    {
        return $this->setProperty('format', $value);
    }

    /**
     * Specifies the maximum date, which the calendar can show.
     * @param DateTime $value
     * @return Calendar
     */
    public function max($value)
    {
        return $this->setProperty('max', $value);
    }

    /**
     * Specifies the minimum date, which the calendar can show.
     * @param DateTime $value
     * @return Calendar
     */
    public function min($value)
    {
        return $this->setProperty('min', $value);
    }

    /**
     * Templates for the cells rendered in the "month" view.
     * @param CalendarMonth|array $value
     * @return Calendar
     */
    public function month($value)
    {
        return $this->setProperty('month', $value);
    }

    /**
     * Specifies the start view.
     * @param string $value
     * @return Calendar
     */
    public function start($value)
    {
        return $this->setProperty('start', $value);
    }

    /**
     * Specifies the selected date.
     * @param DateTime $value
     * @return Calendar
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
    }

    /**
     * Sets the change event of the Calendar.
     * Fires when the selected date is changed
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return Calendar
     */
    public function change($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
     * Sets the navigate event of the Calendar.
     * Fires when navigate
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return Calendar
     */
    public function navigate($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('navigate', $value);
    }
}
