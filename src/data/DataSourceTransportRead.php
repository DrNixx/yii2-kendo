<?php
namespace yii2\kendo\data;

use yii2\kendo\JavaScriptFunction;
use yii2\kendo\SerializableObject;

class DataSourceTransportRead extends SerializableObject
{
    /**
     * If set to false, it will force requested pages not to be cached by the browser.
     * Setting cache to false also appends a query string parameter, "_=[TIMESTAMP]", to the URL.
     * Refer to the jQuery.ajax documentation for further info.
     * @param boolean $value
     * @return $this
     */
    public function cache($value)
    {
        return $this->setProperty('cache', $value);
    }

    /**
     * The content-type HTTP header sent to the server.
     * Default is "application/x-www-form-urlencoded". Use "application/json" if the content is JSON.
     * Refer to the jQuery.ajax documentation for further info.
     * @param string $value
     * @return $this
     */
    public function contentType($value)
    {
        return $this->setProperty('contentType', $value);
    }

    /**
     * Data to be send to the server.
     * Refer to the jQuery.ajax documentation for further info.
     * @param |string|\Kendo\JavaScriptFunction $value
     * @return $this
     */
    public function data($value)
    {
        return $this->setProperty('data', $value);
    }

    /**
     * The type of data that you're expecting back from the server.
     * Commonly used values are "json" and "jsonp".
     * Refer to the jQuery.ajax documentation for further info.
     * @param string $value
     * @return $this
     */
    public function dataType($value)
    {
        return $this->setProperty('dataType', $value);
    }

    /**
     * The type of request to make ("POST", "GET", "PUT" or "DELETE"), default is "GET".
     * Refer to the jQuery.ajax documentation for further info.
     * @param string $value
     * @return \yii2\kendo\data\DataSourceTransportRead
     */
    public function type($value)
    {
        return $this->setProperty('type', $value);
    }

    /**
     * The remote url to call when creating a new record.
     *
     * @param string|JavaScriptFunction $value
     *
     * @return $this
     */
    public function url($value)
    {
        if (is_array($value)) {
            foreach ($value as $key => $val) {
                $value = new JavaScriptFunction(sprintf('function(data) { return "%s/" + data.%s; }', $val, $key));
                break;
            }
        }

        return $this->setProperty('url', $value);
    }

    /**
     * @param bool $flag
     *
     * @return $this
     */
    public function withCredentials($flag)
    {
        return $this->setProperty('xhrFields', ["withCredentials" => $flag]);
    }
}
