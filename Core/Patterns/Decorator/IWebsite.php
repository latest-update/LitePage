<?php


namespace Core\Patterns\Decorator;


interface IWebsite
{
    public function head(): string;
    public function body(): string;
    public function script(): string;
}