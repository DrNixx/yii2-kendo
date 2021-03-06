<?php
namespace kendo\data;

use kendo\JavaScriptFunction;
use kendo\SerializableObject;

class DataSourceSchema extends SerializableObject
{
    /**
     * @param DataSourceSchemaModel|array $value
     * @return $this
     */
    public function model($value)
    {
        if (is_array($value)) {
            return $this->setProperty('model', DataSourceSchemaModel::make($value));
        } else {
            return $this->setProperty('model', $value);
        }
    }

    /**
     * Specifies the field from the response which contains the aggregate results.
     * If set to a function - the function will be called to return the aggregate results for the current response.
     * Result should have the following format: i.e.
     * @param JavaScriptFunction|string $value
     * @return \kendo\data\DataSourceSchema
     */
    public function aggregates($value)
    {
        return $this->setProperty('aggregates', $value);
    }

    /**
     * Specifies the field from the response which contains the data items.
     * If set to a function - the function will be called to return the data items for the current response.
     * @param JavaScriptFunction|string $value
     * @return \kendo\data\DataSourceSchema
     */
    public function data($value)
    {
        return $this->setProperty('data', $value);
    }

    /**
     * Specifies the field from the response which contains any errors.
     * If set to a function - the function will be called to return the errors for the current response (if present).
     * If there are any errors the error event of the DataSource will be raised.
     * @param JavaScriptFunction|string $value
     * @return \kendo\data\DataSourceSchema
     */
    public function errors($value)
    {
        return $this->setProperty('errors', $value);
    }

    /**
     * Specifies the field from the response which contains the groups.
     * If set to a function - the function will be called to return the groups for the current response.
     * Used instead of the schema.data setting if remote grouping operation is executed.
     * The result should have the following format:
     * @param JavaScriptFunction|string $value
     * @return \kendo\data\DataSourceSchema
     */
    public function groups($value)
    {
        return $this->setProperty('groups', $value);
    }

    /**
     * Sets the parse option of the DataSourceSchema.
     * Executed before the server response is used. Appropriate for preprocessing or parsing of the server response.
     * @param string|JavaScriptFunction $value Can be a JavaScript function definition or name.
     * @return \kendo\data\DataSourceSchema
     */
    public function parse($value)
    {
        if (is_string($value)) {
            $value = new JavaScriptFunction($value);
        }

        return $this->setProperty('parse', $value);
    }

    /**
     * Specifies the field from the response which contains the total number of data items.
     * If set to a function - the function will be called to return the total number of data items
     * for the current response.
     * @param JavaScriptFunction|string $value
     * @return \kendo\data\DataSourceSchema
     */
    public function total($value)
    {
        return $this->setProperty('total', $value);
    }

    /**
     * Specify the type of the response - XML or JSON. The only supported values are "xml" and "json".
     * @param string $value
     * @return \kendo\data\DataSourceSchema
     */
    public function type($value)
    {
        return $this->setProperty('type', $value);
    }
}
