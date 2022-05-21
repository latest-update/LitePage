<?php


namespace Core\Template;


class HtmlType
{
    private static string $head = '';
    private static string $body = '';
    private static string $script = '';

    public static function setHead(string $head): void
    {
        static::$head = $head;
    }
    public static function setBody(string $body): void
    {
        static::$body = $body;
    }
    public static function setScript(string $script): void
    {
        static::$script = $script;
    }

    public static function printer(): string
    {
        $content = '<!doctype html>
                    <html lang="en">
                    <head>
	                    '. static::$head .'
                    </head>
                    <body>
	                    '. static::$body .'
                    </body>
                    <script>
                        '. static::$script .'
                    </script>
                    </html>';
        return $content;
    }

}