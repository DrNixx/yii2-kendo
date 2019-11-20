<?php
namespace kendo\ui;

use kendo\SerializableObject;

class EditorImageBrowser extends SerializableObject
{
    /**
     * Defines the allowed file extensions.
     * @param string $value
     * @return EditorImageBrowser
     */
    public function fileTypes($value)
    {
        return $this->setProperty('fileTypes', $value);
    }

    /**
     * Defines the initial folder to display, relative to the root.
     * @param string $value
     * @return EditorImageBrowser
     */
    public function path($value)
    {
        return $this->setProperty('path', $value);
    }

    /**
     * Get transport
     * @return EditorImageBrowserTransport
     */
    public function getTransport()
    {
        return $this->getProperty('transport');
    }

    /**
     * Specifies the settings for loading and saving data.
     * @param EditorImageBrowserTransport|array $value
     * @return EditorImageBrowser
     */
    public function transport($value)
    {
        if (is_array($value)) {
            return $this->setProperty('transport', EditorImageBrowserTransport::make($value));
        } else {
            return $this->setProperty('transport', $value);
        }
    }

    /**
     * Set the object responsible for describing the image raw data format.
     * @param EditorImageBrowserSchema|array $value
     * @return EditorImageBrowser
     */
    public function schema($value)
    {
        if (is_array($value)) {
            return $this->setProperty('schema', EditorImageBrowserSchema::make($value));
        } else {
            return $this->setProperty('schema', $value);
        }
    }

    /**
     * Defines texts shown within the pager.
     * @param EditorImageBrowserMessages|array $value
     * @return EditorImageBrowser
     */
    public function messages($value)
    {
        return $this->setProperty('messages', $value);
    }
}
