<?php
namespace kendo;

interface Serializable
{
    public function getProperties();

    public function toJSON();
}
