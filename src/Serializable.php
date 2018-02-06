<?php
namespace yii2\kendo;

interface Serializable
{
    public function getProperties();

    public function toJSON();
}
