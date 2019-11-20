<?php
namespace kendo\ui;

use kendo\SerializableObject;

class ColorPaletteTileSize extends SerializableObject
{
    /**
     * The width of the color cell.
     * @param float $value
     * @return ColorPaletteTileSize
     */
    public function width($value)
    {
        return $this->setProperty('width', $value);
    }

    /**
     * The height of the color cell.
     * @param float $value
     * @return ColorPaletteTileSize
     */
    public function height($value)
    {
        return $this->setProperty('height', $value);
    }
}
