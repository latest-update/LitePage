<?php


namespace Core\Http\Structure;

use Core\Http\Http;

class Header
{
    public static function asJson()
    {
        Http::addHeader('Content-Type', 'application/json;charset=utf-8');
    }

    public static function asHtml()
    {
        Http::addHeader('Content-Type', 'text/html;charset=utf-8');
    }

    public static function asXml()
    {
        Http::addHeader('Content-Type', 'application/xml');
    }
}