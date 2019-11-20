<?php

namespace kendo\ui;

use kendo\SerializableObject;

class ColorPickerTileSize extends SerializableObject {

    /**
     * The width of the color cell.
     * @param float $value
     * @return ColorPickerTileSize
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
     * The height of the color cell.
     * @param float $value
     * @return ColorPickerTileSize
     */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

}
