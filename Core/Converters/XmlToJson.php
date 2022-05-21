<?php

namespace Core\Converters;

use Core\Patterns\Adapter\Converter;

class XmlToJson implements Converter
{
    private string $XML;

    public function set($XML): XmlToJson
    {
        $this->XML = $XML;
        return $this;
    }

    public function convert()
    {
        $XML = simplexml_load_string($this->XML);
        return json_encode($XML);
    }
}