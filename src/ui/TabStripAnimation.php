<?php

namespace yii2\kendo\ui;

use yii2\kendo\SerializableObject;

class TabStripAnimation extends SerializableObject {

    /**
     * The visual animation(s) that will be used when the current tab is closed.
     * @param \yii2\kendo\ui\TabStripAnimationClose|array $value
     * @return \yii2\kendo\ui\TabStripAnimation
     */
    public function close($value) {
        return $this->setProperty('close', $value);
    }

    /**
     * The visual animation(s) that will be used when the new tab is shown.
     * @param \yii2\kendo\ui\TabStripAnimationOpen|array $value
     * @return \yii2\kendo\ui\TabStripAnimation
     */
    public function open($value) {
        return $this->setProperty('open', $value);
    }

}
