<?php

namespace yii2\kendo\data;

use yii2\kendo\JavaScriptFunction;
use yii2\kendo\SerializableObject;

class DataSourceTransport extends SerializableObject
{
    /**
     * Options for remote create data operation, or the URL of the remote service.
     * @param string|JavaScriptFunction|\yii2\kendo\data\DataSourceTransportCreate|array $value
     * @return \yii2\kendo\data\DataSourceTransport
     */
    public function create($value)
    {
        if (is_array($value)) {
            return $this->setProperty('create', DataSourceTransportCreate::make($value));
        } else {
            return $this->setProperty('create', $value);
        }
    }

    /**
     * Options for remote destroy data operation, or the URL of the remote service.
     * @param string|JavaScriptFunction|\yii2\kendo\data\DataSourceTransportDestroy|array $value
     * @return \yii2\kendo\data\DataSourceTransport
     */
    public function destroy($value)
    {
        if (is_array($value)) {
            return $this->setProperty('destroy', DataSourceTransportDestroy::make($value));
        } else {
            return $this->setProperty('destroy', $value);
        }
    }

    /**
     * Sets the parameterMap option of the DataSourceTransport.
     * Converts the request parameters and data from the internal format to a format suitable for the remote service.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \yii2\kendo\data\DataSourceTransport
     */
    public function parameterMap($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('parameterMap', $value);
    }

    /**
     * Options for remote read data operation, or the URL of the remote service.
     * @param string|JavaScriptFunction|\yii2\kendo\data\DataSourceTransportRead|array $value
     * @return \yii2\kendo\data\DataSourceTransport
     */
    public function read($value)
    {
        if (is_array($value)) {
            return $this->setProperty('read', DataSourceTransportRead::make($value));
        } else {
            return $this->setProperty('read', $value);
        }
    }

    /**
     * Options for remote update data operation, or the URL of the remote service.
     * @param string|JavaScriptFunction|\yii2\kendo\data\DataSourceTransportUpdate|array $value
     * @return \yii2\kendo\data\DataSourceTransport
     */
    public function update($value)
    {
        if (is_array($value)) {
            return $this->setProperty('update', DataSourceTransportUpdate::make($value));
        } else {
            return $this->setProperty('update', $value);
        }
    }
}
