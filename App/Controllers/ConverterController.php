<?php

namespace App\Controllers;

use Core\Converters\JsonToXml;
use Core\Converters\XmlToJson;
use Core\Http\Structure\Header;

class ConverterController
{
    public function toXml (): string
    {
        Header::asJson();

        $xml = "<?xml version='1.0'?>
                        <document>
                            <name>Connor</name>
                            <surname>Mcgregor</surname>
                            <age>35</age>
                            <about>UFC</about>
                        </document>";

        return (new XmlToJson)->set($xml)->convert();
    }

    public function toJson (): string
    {
        Header::asXml();

        $json = '
            {
                "name": "Connor",
                "surname": "Mcgregor",
                "age": "35",
                "about": "UFC"
            }
        ';
        return (new JsonToXml)->set($json)->convert();
    }

    public function circulation ()
    {
        Header::asXml();

        $xml = "<?xml version='1.0'?>
                        <document>
                            <name>Connor</name>
                            <surname>Mcgregor</surname>
                            <age>35</age>
                            <about>UFC</about>
                        </document>";

        return ( (new JsonToXml() )->set( (new XmlToJson)->set($xml)->convert() )->convert() );
    }
}