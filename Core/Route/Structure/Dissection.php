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
        $urlWithoutParameters = explode('?', mb_strtolower(Http::$path));
        if ($urlWithoutParameters[0] == mb_strtolower($url) and !$this->found) {
            $this->found = true;
            return true;
        }
        return false;
    }

}