<?php


namespace Core\Converters;


use Core\Patterns\Adapter\Converter;
use SimpleXMLElement;

class JsonToXml implements Converter
{
    private string $JSON;
    private array $array;

    public function set($JSON): JsonToXml
    {
        $this->JSON = $JSON;
        return $this;
    }

    public function convert ()
    {
        $this->array = json_decode($this->JSON,TRUE);
        return $this->arrayToXml();
    }

    private function arrayToXml ()
    {
        $xml = new SimpleXMLElement('<document/>');
        array_walk_recursive($this->array, array ($xml, 'addChild'));
        return $xml->asXML();
    }
}