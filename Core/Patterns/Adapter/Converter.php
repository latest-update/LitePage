<?php


namespace Core\Patterns\Adapter;


interface Converter
{
    public function set($JSON);
    public function convert();
}