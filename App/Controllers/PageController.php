<?php


namespace App\Controllers;

use Core\Patterns\Decorator\BasePage;

class PageController
{
    public function show(): string
    {
        return view(   new BasePage()  );
    }
}