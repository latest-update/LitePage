<?php

use Core\Http\Http;
use Core\Template\HtmlType;

Http::init();


function print_pre(array $array)
{
    print '<pre>';
        print_r($array);
    print '</pre>';
}

function println(string $string)
{
    print $string . '<br>';
}

function view ($page): string
{
    HtmlType::setHead($page->head());
    HtmlType::setBody($page->body());
    HtmlType::setScript($page->script());
    return HtmlType::printer();
}