<?php


namespace Core\Patterns\Decorator;


class CustomPage implements IWebsite
{
    protected IWebsite $website;

    public function __construct(IWebsite $website)
    {
        $this->website = $website;
    }

    public function head(): string
    {
        return $this->website->head();
    }

    public function body(): string
    {
        return $this->website->body();
    }

    public function script(): string
    {
        return $this->website->script();
    }
}