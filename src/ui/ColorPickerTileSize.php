<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class ColorPickerTileSize extends SerializableObject {

    /**
     * The width of the color cell.
     * @param float $value
     * @return \yii2\kendo\ui\ColorPickerTileSize
     */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
     * The height of the color cell.
     * @param float $value
     * @return \yii2\kendo\ui\ColorPickerTileSize
     */
    public function height($value) {
        return $this->setProperty('height', $value);
    }

}
