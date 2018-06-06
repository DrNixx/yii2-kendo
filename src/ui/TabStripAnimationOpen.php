<?php
namespace kendo\ui;

use kendo\SerializableObject;

class TabStripAnimationOpen extends SerializableObject
{
    /**
     * The number of milliseconds used for the visual animation when a new tab is shown.
     *
     * @param float $value
     *
     * @return $this
     */
    public function duration($value)
    {
        return $this->setProperty('duration', $value);
    }

    /**
     * A whitespace-separated string of animation effects that are used when a new tab is shown.
     * Options include "expand:vertical" and "fadeIn".
     *
     * @param string $value
     *
     * @return $this
     */
    public function effects($value)
    {
        return $this->setProperty('effects', $value);
    }

    /**
     * @param boolean $value
     *
     * @return $this
     */
    public function show($value)
    {
        return $this->setProperty('show', $value);
    }
}
