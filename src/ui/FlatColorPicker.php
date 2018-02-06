<?php

namespace yii2\kendo\ui;

use yii2\kendo\JavaScriptFunction;

class FlatColorPicker extends InputWidget
{
    public function kendoName() {
        return 'FlatColorPicker';
    }

    /**
     * Specifies whether we should display the opacity slider to allow
selection of transparency.
     * @param boolean $value
     * @return \yii2\kendo\ui\FlatColorPicker
     */
    public function opacity($value) {
        return $this->setProperty('opacity', $value);
    }

    /**
     * Specifies whether we should display the Apply / Cancel buttons.
     * @param boolean $value
     * @return \yii2\kendo\ui\FlatColorPicker
     */
    public function buttons($value) {
        return $this->setProperty('buttons', $value);
    }

    /**
     * Specifies the initially selected color.
     * @param string $value
     * @return \yii2\kendo\ui\FlatColorPicker
     */
    public function value($value) {
        return $this->setProperty('value', $value);
    }

    /**
     * Specifies whether we should display the preview bar which displays the
current color and the input field.
     * @param boolean $value
     * @return \yii2\kendo\ui\FlatColorPicker
     */
    public function preview($value) {
        return $this->setProperty('preview', $value);
    }

    /**
     * Allows customization of "Apply" / "Cancel" labels.
     * @param  $value
     * @return \yii2\kendo\ui\FlatColorPicker
     */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

    /**
     * Sets the change event of the FlatColorPicker.
     * Triggers when a new color has been selected.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\ui\FlatColorPicker
     */
    public function change($value) {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }


}
