<?php

namespace kendo\ui;

use kendo\html\Element;
use kendo\JavaScriptFunction;

class ColorPicker extends InputWidget
{
    protected function kendoName()
    {
        return 'ColorPicker';
    }

    protected function createElement()
    {
        $input = new Element('input', true);

        $value = $this->getProperty('value');

        $input->attr('type', 'color');

        if (isset($value)) {
            $input->attr('value', $value);
        }

        return $input;
    }

    /**
     * Applicable only for the HSV selector (that is, when pallete is null).
     * This specifies whether the "Apply" / "Cancel" buttons are to be displayed in the drop-down HSV picker.
     * @param boolean $value
     * @return ColorPicker
     */
    public function buttons($value)
    {
        return $this->setProperty('buttons', $value);
    }

    /**
     * The number of columns to show in the simple color dropdown.
     * For the "basic" and "websafe" palettes this is automatically initialized;
     * if you pass a custom palette then you can set this to some value that makes sense for your colors.
     * @param float $value
     * @return ColorPicker
     */
    public function columns($value)
    {
        return $this->setProperty('columns', $value);
    }

    /**
     * The size of a color cell.
     * @param float|ColorPickerTileSize|array $value
     * @return ColorPicker
     */
    public function tileSize($value)
    {
        return $this->setProperty('tileSize', $value);
    }

    /**
     * Allows customization of "Apply" / "Cancel" labels.
     * @param  $value
     * @return ColorPicker
     */
    public function messages($value)
    {
        return $this->setProperty('messages', $value);
    }

    /**
     * When a non-null palette argument is supplied, the drop-down will be a simple color picker.
     * The following are supported:If palette is missing or null, the widget will display the HSV selector.
     * @param string $value
     * @return ColorPicker
     */
    public function palette($value)
    {
        return $this->setProperty('palette', $value);
    }

    /**
     * Only for the HSV selector.  If true, the widget will display the opacity slider.
     * Note that currently in HTML5 the <input type="color"> does not support opacity.
     * @param boolean $value
     * @return ColorPicker
     */
    public function opacity($value)
    {
        return $this->setProperty('opacity', $value);
    }

    /**
     * Only for the HSV selector.
     * Displays the color preview element, along with an input field where the end
     * user can paste a color in a CSS-supported notation.
     * @param boolean $value
     * @return ColorPicker
     */
    public function preview($value)
    {
        return $this->setProperty('preview', $value);
    }

    /**
     * A CSS class name to display an icon in the color picker button.
     * If specified, the HTML for the element will look like this:
     * @param string $value
     * @return ColorPicker
     */
    public function toolIcon($value)
    {
        return $this->setProperty('toolIcon', $value);
    }

    /**
     * The initially selected color.
     * This can be a string supported by parseColor or a Color object.
     * Note that when initializing the widget from an <input> element, the initial color
     * will be decided by the field instead.
     * @param string $value
     * @return ColorPicker
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
    }

    /**
     * Sets the change event of the ColorPicker.
     * Fires when a color was selected, either by clicking on it (in the simple picker),
     * by clicking ENTER or by pressing "Apply" in the HSV picker.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return ColorPicker
     */
    public function change($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
     * Sets the select event of the ColorPicker.
     * Fires as a new color is displayed in the drop-down picker.
     * This is not necessarily the "final" value; for example this event triggers when
     * the sliders in the HSV selector are dragged, but then pressing ESC would cancel the selection
     * and the color will revert to the original value.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return ColorPicker
     */
    public function select($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }

    /**
     * Sets the open event of the ColorPicker.
     * Fires when the picker popup is opening.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return ColorPicker
     */
    public function open($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }

    /**
     * Sets the close event of the ColorPicker.
     * Fires when the picker popup is closing.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return ColorPicker
     */
    public function close($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }
}
