<?php


namespace Core\Route\Structure;


use Core\Http\Http;
use Core\Patterns\Singleton\Singleton;

class Dissection
{
    use Singleton;

    public bool $found = false;

    public function compare($url) : bool
    {
        if (mb_strtolower(Http::$path) == mb_strtolower($url) and !$this->found) {
            $this->found = true;
            return true;
        }
        return false;
    }

}