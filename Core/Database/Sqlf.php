<?php


namespace Core\Database;


class Sqlf
{
    public string $statement;

    public string $query;

    public string $type;

    public function __construct(string $statement, string $query)
    {
        $this->statement = $statement;
        $this->query = $query;
    }

}