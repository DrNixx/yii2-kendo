<?php
namespace yii2\kendo\ui;

use yii2\kendo\JavaScriptFunction;
use yii2\kendo\SerializableObject;

class EditorImageBrowserTransport extends SerializableObject
{
    /**
     * Options or URL for remote image retrieval.
     * @param string|\yii2\kendo\ui\EditorImageBrowserTransportRead|array $value
     * @return \yii2\kendo\ui\EditorImageBrowserTransport
     */
    public function read($value)
    {
        if (is_array($value)) {
            return $this->setProperty('read', EditorImageBrowserTransportRead::make($value));
        } else {
            return $this->setProperty('read', $value);
        }
    }

    /**
     * The URL for retrieving the thumbnail version of the image.
     * If not specified a default image icon will be shown.
     * If function is assign, the current path and image name will be provided.
     * @param string|JavaScriptFunction $value
     * @return \yii2\kendo\ui\EditorImageBrowserTransport
     */
    public function thumbnailUrl($value)
    {
        return $this->setProperty('thumbnailUrl', $value);
    }

    /**
     * The URL which will handle the upload of the new images.
     * If not specified the Upload button will not be displayed.
     * @param string $value
     * @return \yii2\kendo\ui\EditorImageBrowserTransport
     */
    public function uploadUrl($value)
    {
        return $this->setProperty('uploadUrl', $value);
    }

    /**
     * The URL responsible for serving the original image. A file name placeholder should be specifed.
     * @param string|JavaScriptFunction $value
     * @return \yii2\kendo\ui\EditorImageBrowserTransport
     */
    public function imageUrl($value)
    {
        return $this->setProperty('imageUrl', $value);
    }

    /**
     * Options or URL which will handle the file and directory deletion.
     * If not specified the delete button will not be present.
     * @param string|\yii2\kendo\ui\EditorImageBrowserTransportDestroy|array $value
     * @return \yii2\kendo\ui\EditorImageBrowserTransport
     */
    public function destroy($value)
    {
        if (is_array($value)) {
            return $this->setProperty('destroy', EditorImageBrowserTransportDestroy::make($value));
        } else {
            return $this->setProperty('destroy', $value);
        }
    }

    /**
     * Options or URL which will handle the directory creation.
     * If not specified that create new folder button will not be present.
     * @param string|\yii2\kendo\ui\EditorImageBrowserTransportCreate|array $value
     * @return \yii2\kendo\ui\EditorImageBrowserTransport
     */
    public function create($value)
    {
        if (is_array($value)) {
            return $this->setProperty('create', EditorImageBrowserTransportCreate::make($value));
        } else {
            return $this->setProperty('create', $value);
        }
    }
}
