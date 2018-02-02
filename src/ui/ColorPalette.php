<?php
namespace yii2\kendo\ui;

use yii2\kendo\JavaScriptFunction;

class ColorPalette extends Widget
{
    public function name()
    {
        return 'ColorPalette';
    }

    /**
     * Specifies the color palette to display.
     * It can be a string with comma-separated colors in hex representation,
     * an array of Color objects or of strings that parseColor understands.
     * As a shortcut, you can pass "basic" to get the simple palette (this is the default)
     * or "websafe" to get the Web-safe palette.
     * @param string|array $value
     * @return \yii2\kendo\ui\ColorPalette
     */
    public function palette($value)
    {
        return $this->setProperty('palette', $value);
    }

    /**
     * The number of columns to display.
     * When you pass "websafe" this will automatically default to 18.
     * @param float $value
     * @return \yii2\kendo\ui\ColorPalette
     */
    public function columns($value)
    {
        return $this->setProperty('columns', $value);
    }

    /**
     * The size of a color cell.
     * @param float|ColorPaletteTileSize|array $value
     * @return \yii2\kendo\ui\ColorPalette
     */
    public function tileSize($value)
    {
        return $this->setProperty('tileSize', $value);
    }

    /**
     * Specifies the initially selected color.
     * @param string $value
     * @return \yii2\kendo\ui\ColorPalette
     */
    public function value($value)
    {
        return $this->setProperty('value', $value);
    }

    /**
     * Sets the change event of the ColorPalette.
     * Triggers when a new color has been changed.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\ColorPalette
     */
    public function change($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }
}
